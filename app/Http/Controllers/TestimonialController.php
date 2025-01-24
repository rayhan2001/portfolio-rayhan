<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('backend.pages.testimonials.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $testimonial = new Testimonial();
        $testimonial->title = $request->title;
        $testimonial->client_name = $request->client_name;
        $testimonial->client_country = $request->client_country;
        $testimonial->short_description = $request->short_description;
        $testimonial->ratting = $request->ratting;
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/testimonial/', $filename);
            $testimonial->image = $filename;
        }
        $testimonial->save();

        return redirect()->route('testimonial.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $testimonial = Testimonial::where('id',$id)->first();
        return view('backend.pages.testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimonial = Testimonial::where('id',$id)->first();
        return view('backend.pages.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->title = $request->title;
        $testimonial->client_name = $request->client_name;
        $testimonial->client_country = $request->client_country;
        $testimonial->short_description = $request->short_description;
        $testimonial->ratting = $request->ratting;
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            if($testimonial->image != null) {
                unlink('uploads/testimonial/' . $testimonial->image);
            }
            $file->move('uploads/testimonial/', $filename);
            $testimonial->image = $filename;
        }
        $testimonial->save();

        return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return redirect()->route('testimonial.index');
    }
}
