<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Blog</title>
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
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-2xl font-bold mb-6">Add New Blog</h2>

                <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label class="block mb-1 font-semibold">Title</label>
                        <input type="text" name="title" class="w-full border rounded px-3 py-2" required>
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1 font-semibold">Content</label>
                        <textarea name="content" rows="6" class="w-full border rounded px-3 py-2" required></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block mb-1 font-semibold">Image (optional)</label>
                        <input type="file" name="image" class="w-full border rounded px-3 py-2">
                    </div>

                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save Blog</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
