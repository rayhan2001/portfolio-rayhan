<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resumes = Resume::all();
        return view('backend.pages.resumes.index',compact('resumes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.resumes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $resume = new Resume();
        $resume->name = $request->name;
        $resume->title = $request->title;
        $resume->email = $request->email;
        $resume->phone = $request->phone;
        $resume->address = $request->address;
        $resume->summary = $request->summary;
        $resume->work_experiences = $request->work_experiences;
        $resume->skills = $request->skills;
        $resume->education = $request->education;
        $resume->cirtificates = $request->cirtificates;
        $resume->languages = $request->languages;
        $resume->interests = $request->interests;
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/resumes/', $filename);
            $resume->image = $filename;
        }
        $resume->save();

        return redirect()->route('resumes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $resume = Resume::find($id);
        return view('backend.pages.resumes.show',compact('resume'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $resume = Resume::find($id);
        return view('backend.pages.resumes.edit',compact('resume'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $resume = Resume::find($id);
        $resume->name = $request->name;
        $resume->title = $request->title;
        $resume->email = $request->email;
        $resume->phone = $request->phone;
        $resume->address = $request->address;
        $resume->summary = $request->summary;
        $resume->work_experiences = $request->work_experiences;
        $resume->skills = $request->skills;
        $resume->education = $request->education;
        $resume->cirtificates = $request->cirtificates;
        $resume->languages = $request->languages;
        $resume->interests = $request->interests;
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            if($resume->image != null) {
                unlink('uploads/resumes/' . $resume->image);
            }
            $file->move('uploads/resumes/', $filename);
            $resume->image = $filename;
        }
        $resume->save();

        return redirect()->route('resumes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $resume = Resume::find($id);
        if($resume->image != null) {
            unlink('uploads/resumes/' . $resume->image);
        }
        $resume->delete();

        return redirect()->back();
    }
}
