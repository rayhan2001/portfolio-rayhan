<?php

namespace App\Http\Controllers;

use App\Models\WhatIDo;
use Illuminate\Http\Request;

class WhatIDoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $what_i_do = WhatIDo::all();
        return view('backend.pages.what-i-do.index',compact('what_i_do'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.what-i-do.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $what_i_do = new WhatIDo();
        $what_i_do->title = $request->title;
        $what_i_do->description = $request->description;
        if($request->hasFile('icon')) {
            $file = $request->file('icon');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/what-i-do/', $filename);
            $what_i_do->icon = $filename;
        }
        $what_i_do->save();

        return redirect()->route('what-i-do.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $what_i_do = WhatIDo::where('id',$id)->first();
        return view('backend.pages.what-i-do.show', compact('what_i_do'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $what_i_do = WhatIDo::where('id',$id)->first();
        return view('backend.pages.what-i-do.edit', compact('what_i_do'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $what_i_do = WhatIDo::find($id);
        $what_i_do->title = $request->title;
        $what_i_do->description = $request->description;
        if($request->hasFile('icon')) {
            $file = $request->file('icon');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            if($what_i_do->icon != null) {
                unlink('uploads/what-i-do/' . $what_i_do->icon);
            }
            $file->move('uploads/what-i-do/', $filename);
            $what_i_do->icon = $filename;
        }
        $what_i_do->save();

        return redirect()->route('what-i-do.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $what_i_do = WhatIDo::find($id);
        $what_i_do->delete();
        return redirect()->route('what-i-do.index');
    }
}
