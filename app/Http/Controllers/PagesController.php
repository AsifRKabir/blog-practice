<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Main;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $main = Main::first();
        $blogs = Blog::all();
        return view('pages.home.index', compact('main', 'blogs'));
    }

    public function blog($id)
    {
        $blog = Blog::find($id);
        return view('pages.home.blog', compact('blog'));
    }
}
