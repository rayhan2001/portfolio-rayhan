<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('category')->get();
        return view('backend.pages.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ProjectCategory::all();
        return view('backend.pages.projects.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project = new Project();
        $project->name = $request->name;
        $project->description = $request->description;
        $project->short_description = $request->short_description;
        $project->client_name = $request->client_name;
        $project->category_id = $request->category_id;
        $project->technologies = $request->technologies;
        $project->tools = $request->tools;
        $project->live_link = $request->live_link;
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/projects/', $filename);
            $project->image = $filename;
        }
        $project->save();

        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project = Project::with('category')->where('id',$id)->first();
        return view('backend.pages.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::where('id',$id)->first();
        $categories = ProjectCategory::all();
        return view('backend.pages.projects.edit', compact('project', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::find($id);
        $project->name = $request->name;
        $project->description = $request->description;
        $project->short_description = $request->short_description;
        $project->client_name = $request->client_name;
        $project->category_id = $request->category_id;
        $project->technologies = $request->technologies;
        $project->tools = $request->tools;
        $project->live_link = $request->live_link;
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            if($project->image != null) {
                unlink('uploads/projects/' . $project->image);
            }
            $file->move('uploads/projects/', $filename);
            $project->image = $filename;
        }
        $project->save();

        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::find($id);
        if($project->image != null) {
            unlink('uploads/projects/' . $project->image);
        }
        $project->delete();

        return redirect()->back();
    }
}
