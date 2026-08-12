<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('Website.Frontend.index');
    }

    public function about()
    {
        return view('Website.Frontend.about');
    }
    public function rooms()
    {
        return view('Website.Frontend.rooms');
    }
    public function blog()
    {
        return view('Website.Frontend.blog');
    }
    public function contact()
    {
        return view('Website.Frontend.contact');
    }
}
