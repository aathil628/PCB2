@extends('layouts.layout4')
@php
$title = 'Our Blogs';
$subtitle = 'Our Blogs';
@endphp
@section('title', 'Blog | MyFirstPCB')
@section('content')

<x-strickyHeader />
<div style="height: 30px;"></div>
<!--Blog Page Start-->
<section class="blog-page">
    <div class="container">
        <div class="row">
            @forelse($blogs as $index => $blog)
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ ($index % 3 + 1) * 100 }}ms">
                    <a href="{{ route('blog.show', $blog->id) }}" style="text-decoration:none;color:inherit;display:block;">
                        <div class="blog-two__single">
                            <div class="blog-two__img">
                                @if($blog->image)
                                    <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" style="width:100%; height:250px; object-fit: cover;">
                                @else
                                    <img src="{{ asset('assets/images/blog/default-blog.jpg') }}" alt="{{ $blog->title }}" style="width:100%; height:250px; object-fit: cover;">
                                @endif
                                <div class="blog-two__date">
                                    <span class="icon-calendar"></span>
                                    <p>{{ $blog->created_at->format('F d, Y') }}</p>
                                </div>
                            </div>
                            <div class="blog-two__content">
                                <h4 class="blog-two__title">
                                    {{ Str::limit($blog->title, 80) }}
                                </h4>
                                <p class="blog-two__text">
                                    {{ Str::limit(strip_tags($blog->content), 200) }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <h3>No blog posts found.</h3>
                    <p>Check back later for new updates!</p>
                </div>
            @endforelse
        </div>
        
        @if($blogs->hasPages())
            <div class="row mt-4">
                <div class="col-12">
                    <div class="pagination-wrapper">
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
<!--Blog Page End-->

<x-contact-grid />
<x-footer2 />
<x-mobileMenu />
<x-searchPopup />
<x-scroll-to-top />
@endsection