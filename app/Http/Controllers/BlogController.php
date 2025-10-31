<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the blogs.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $blogs = Blog::latest()
            ->where('status', 'published')
            ->paginate(6);
            
        return view('pages.blog', compact('blogs'));
    }

    /**
     * Display the specified blog post.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function show($id)
    {
        $blog = Blog::where('id', $id)
            ->where('status', 'published')
            ->firstOrFail();
            
        $recentBlogs = Blog::where('id', '!=', $id)
            ->where('status', 'published')
            ->latest()
            ->take(3)
            ->get();
            
        // Update view count (optional)
        $blog->increment('views');
        
        // Set meta tags for SEO
        $metaTitle = $blog->meta_title ?: $blog->title;
        $metaDescription = $blog->meta_description ?: Str::limit(strip_tags($blog->content), 160);
        
        return view('pages.blog-details', compact('blog', 'recentBlogs'))
            ->with('metaTitle', $metaTitle)
            ->with('metaDescription', $metaDescription);
    }
}
