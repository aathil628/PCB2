@extends('admin.dashboard')

@section('content')
<div class="bg-white rounded-lg shadow p-6 max-w-3xl mx-auto">
    <h2 class="text-2xl font-bold mb-6">Edit Blog</h2>

    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-semibold mb-1">Title</label>
            <input type="text" name="title" value="{{ $blog->title }}" class="w-full border-gray-300 rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Content</label>
            <textarea name="content" rows="6" class="w-full border-gray-300 rounded px-3 py-2" required>{{ $blog->content }}</textarea>
        </div>

        @if($blog->image_url)
            <div class="mb-4">
                <label class="block font-semibold mb-1">Current Image</label>
                <img src="{{ $blog->image_url }}" alt="Blog Image" class="h-32 rounded">
            </div>
        @endif

        <div class="mb-4">
            <label class="block font-semibold mb-1">Change Image</label>
            <input type="file" name="image" class="w-full">
        </div>

        <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-semibold px-4 py-2 rounded">
            Update Blog
        </button>
    </form>
</div>
@endsection
