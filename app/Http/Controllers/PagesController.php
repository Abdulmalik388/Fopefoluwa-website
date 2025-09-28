<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Blog;
use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function home()
{
    $blogs = Blog::latest()->take(3)->get();
    $team = Team::latest()->take(3)->get(); // fetch 3 latest team members

    return view('pages.home', compact('blogs', 'team'));
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
        $team = Team::orderBy('id', 'asc')->get(); // or ->latest() if you want newest first
        return view('pages.team', compact('team')); // make sure blade is resources/views/pages/team.blade.php
    }

}
