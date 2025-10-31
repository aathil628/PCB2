<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="min-h-screen flex">
    <div class="w-64 bg-gray-800 text-white">
        <div class="p-4">
            <h1 class="text-2xl font-bold">Admin Panel</h1>
        </div>
        <nav class="mt-6">
            <a href="{{ route('admin.dashboard') }}" class="block py-2 px-4 text-gray-200 hover:bg-gray-700">Dashboard</a>
            <a href="{{ route('admin.blogs.index') }}" class="block py-2 px-4 text-gray-200 hover:bg-gray-700">Blogs</a>
        </nav>
    </div>

    <div class="flex-1 p-8">
        <div class="bg-white rounded-lg shadow p-6 max-w-2xl mx-auto">
            <h2 class="text-2xl font-bold mb-6">Edit Blog</h2>

            <form method="POST" action="{{ route('admin.blogs.update', $blog->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-gray-700">Title</label>
                    <input type="text" name="title" value="{{ $blog->title }}" class="w-full border rounded px-3 py-2" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Content</label>
                    <textarea name="content" class="w-full border rounded px-3 py-2" rows="5" required>{{ $blog->content }}</textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Current Image</label><br>
                    @if($blog->image_url)
                        <img src="{{ asset($blog->image_url) }}" class="h-24 mb-2">
                    @else
                        No image uploaded
                    @endif
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Change Image</label>
                    <input type="file" name="image" class="w-full border rounded px-3 py-2">
                </div>

                <div class="flex justify-between">
                    <a href="{{ route('admin.blogs.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Back</a>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
