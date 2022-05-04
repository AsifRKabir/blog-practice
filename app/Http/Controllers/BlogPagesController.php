<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogPagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $blogs = Blog::all();
        return view('pages.admin.blogs.list', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required | string',
            'sub_title' => 'required | string',
            'image' => 'required | image',
            'description' => 'required | string',
            'category' => 'required | string',
        ]);

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->sub_title = $request->sub_title;
        $blog->description = $request->description;
        $blog->category = $request->category;

        $image_file = $request->file('image');
        Storage::putFile('public/img/', $image_file);
        $blog->image = "storage/img/" . $image_file->hashName();

        $blog->save();

        return redirect()->route('admin.blogs.create')->with('success', 'New Blog Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('pages.admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required | string',
            'sub_title' => 'required | string',
            'description' => 'required | string',
            'category' => 'required | string',
        ]);

        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->sub_title = $request->sub_title;
        $blog->description = $request->description;
        $blog->category = $request->category;

        if ($request->file('image')) {
            $image_file = $request->file('image');
            Storage::putFile('public/img/', $image_file);
            $blog->image = "storage/img/" . $image_file->hashName();
        }

        $blog->save();

        return redirect()->route('admin.blogs.list')->with('success', 'Blog Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        @unlink(public_path($blog->image));
        $blog->delete();

        return redirect()->route('admin.blogs.list')->with('success', 'Blog Deleted Successfully');
    }
}
