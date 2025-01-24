<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutUs = AboutUs::all();
        return view('backend.pages.about-us.index',compact('aboutUs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.about-us.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aboutUs = new AboutUs();
        $aboutUs->year_of_experience = $request->year_of_experience;
        $aboutUs->project_completed = $request->project_completed;
        $aboutUs->bio = $request->bio;
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/about-us/', $filename);
            $aboutUs->image = $filename;
        }
        $aboutUs->save();

        return redirect()->route('about-us.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aboutUs = AboutUs::where('id',$id)->first();
        return view('backend.pages.about-us.show', compact('aboutUs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aboutUs = AboutUs::where('id',$id)->first();
        return view('backend.pages.about-us.edit', compact('aboutUs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aboutUs = AboutUs::find($id);
        $aboutUs->year_of_experience = $request->year_of_experience;
        $aboutUs->project_completed = $request->project_completed;
        $aboutUs->bio = $request->bio;
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            if($aboutUs->image != null) {
                unlink('uploads/about-us/' . $aboutUs->image);
            }
            $file->move('uploads/about-us/', $filename);
            $aboutUs->image = $filename;
        }
        $aboutUs->save();

        return redirect()->route('about-us.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aboutUs = AboutUs::find($id);
        $aboutUs->delete();
        return redirect()->route('about-us.index');
    }
}
