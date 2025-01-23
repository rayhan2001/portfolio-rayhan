<?php

namespace App\Http\Controllers;

use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projectCategories = ProjectCategory::all();
        return view('backend.pages.project-categories.index', compact('projectCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $projectCategory = new ProjectCategory();
        $projectCategory->name = $request->name;
        $projectCategory->save();

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $projectCate = ProjectCategory::find($id);
        $projectCate->name = $request->name;
        $projectCate->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $projectCate = ProjectCategory::find($id);
        $projectCate->delete();

        return redirect()->back();
    }
}
