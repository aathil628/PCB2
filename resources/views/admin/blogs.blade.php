<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Blogs - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white">
            <div class="p-4">
                <h1 class="text-2xl font-bold">Admin Panel</h1>
            </div>
            <nav class="mt-6">
                <a href="{{ route('admin.dashboard') }}" class="block py-2 px-4 text-gray-200 hover:bg-gray-700">Dashboard</a>
                <a href="{{ route('admin.blogs.index') }}" class="block py-2 px-4 text-gray-200 bg-gray-700">Blogs</a>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left py-2 px-4 text-gray-200 hover:bg-gray-700">Logout</button>
                </form>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-2xl font-bold mb-6">Manage Blogs</h2>

                @if (session('success'))
                    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <a href="{{ route('admin.blogs.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add New Blog</a>

                <table class="w-full mt-6 border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-2 px-4 border">Title</th>
                            <th class="py-2 px-4 border">Image</th>
                            <th class="py-2 px-4 border">Description</th>
                            <th class="py-2 px-4 border">Created At</th>
                            <th class="py-2 px-4 border">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                        <tr>
                            
                            <td class="py-2 px-4 border">{{ $blog->title }}</td>
                            <td class="py-2 px-4 border">
    @if($blog->image_url)
        <img src="{{ asset($blog->image_url) }}" alt="Blog Image" class="h-12 w-12 rounded object-cover">
    @else
        No Image
    @endif
</td>
 <!-- Description Column -->
            <td class="py-2 px-4 border text-gray-700">
                {{ Str::limit($blog->description, 70) ?? '—' }}
            </td>

                            <td class="py-2 px-4 border">{{ $blog->created_at->format('Y-m-d') }}</td>
                            <td class="py-2 px-4 border">
                                <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="text-blue-600 hover:underline">Edit</a> |
                                <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Delete this blog?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="mt-4">
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>
    </div>
</body>
</html>
