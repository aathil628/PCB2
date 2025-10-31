<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    // Show all blogs
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blogs', compact('blogs'));
    }

    // Show form to create a new blog
    public function create()
    {
        return view('admin.blogs_create');
    }

    // Store a new blog
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;

        if ($request->hasFile('image')) {
        $path = $request->file('image')->store('blogs', 'public');
        $blog->image_url = 'storage/' . $path; // 👈 this ensures asset() works
       }


        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully.');
    }

    // Show edit form
    public function edit(Blog $blog)
    {
        return view('admin.blogs_edit', compact('blog'));
    }

    // Update blog
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $blog->title = $request->title;
        $blog->content = $request->content;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('blogs', 'public');
            $blog->image_url = '/storage/' . $path;
        }

        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
    }

    // Delete blog
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
