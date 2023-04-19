<?php

namespace App\Http\Controllers;

use App\Http\Requests\Blogsrequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        $data = Blog::all();
        return view('blogs.index', compact('data'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Blogsrequest $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        // ]);

        $data = $request->validated();

        Blog::create($data);
        // Blog::create($request->all());
        return redirect()->route('blogs.index');
    }

    public function edit(Blog $blogs)
    {
        // dd($blog);
        return view('blogs.edit', compact('blogs'));
    }

    public function update(Blogsrequest $request, Blog $blogs)
    {
        $data = $request->validated();
        $blogs->update($data);

        // $blogs->update($request->all());
        return redirect()->route('blogs.index');
    }

    public function delete(Blog $blogs)
    {
        $blogs->delete();
        return redirect()->route('blogs.index');
    }
}
