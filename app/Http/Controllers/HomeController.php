<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("frontend.pages.home");
    }

    public function about()
    {
        return view("frontend.pages.about");
    }

    public function blog() 
    {
        return view("frontend.pages.blog");
    }
}
