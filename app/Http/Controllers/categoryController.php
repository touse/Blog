<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\addcat;

class categoryController extends Controller
{
   public function cat()
   {
       return view('backend.cat');
   }
   //
   public function create(Request $request)
    {
       $request->validate([
          'catname' => 'required|min:3|max:255',
       ]);

       $slug= Str::slug($request->catname);
 
       $category = cat ::create ([
           'name' => $request->catname,
           'slug' => $slug,
       ]);
    }
}


