<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }

    public function portfolio()
    {
        return view('frontend.pages.portfolio');
    }

    public function services()
    {
        return view('frontend.pages.services');
    }

    public function resume()
    {
        return view('frontend.pages.resume');
    }

    public function blog()
    {
        return view('frontend.pages.blog');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
