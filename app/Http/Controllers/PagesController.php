<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
         $blogs = Blog::latest()->take(3)->get();
        return view('pages.home', compact('blogs'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function blog()
    {
        $blogs = Blog::latest()->paginate(100);
        return view('pages.blog', compact('blogs'));
    }
    public function show(Blog $blog)
{
    return view('pages.blog-show', compact('blog'));
}


    public function donate()
    {
        return view('pages.donate');
    }

    public function contact()
    {
        return view('pages.contact');
    }
      public function team()
    {
        return view('pages.team');
    }
}
