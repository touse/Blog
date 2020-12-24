<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\categorym;

class abccontroller extends Controller
{
    public function dash()
    {
        return view('backend.dash');
    }
   
    public function master()
    {
        return view('frontend.layout.master');
    }
    
    public function blog()
    {
        return view('frontend.blog');
    }
    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
    public function detail()
    {
        return view('frontend.detail');
    }

    

    
}
