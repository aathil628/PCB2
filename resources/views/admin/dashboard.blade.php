<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - NYTTRobotics</title>
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
                <a href="{{ route('admin.blogs.index') }}" class="block py-2 px-4 text-gray-200 hover:bg-gray-700">Blogs</a>
                <form method="POST" action="{{ route('admin.logout') }}" class="block">
                    @csrf
                    <button type="submit" class="w-full text-left py-2 px-4 text-gray-200 hover:bg-gray-700">Logout</button>
                </form>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-2xl font-bold mb-6">Dashboard</h2>
                <p>Welcome to the admin dashboard!</p>
            </div>
        </div>
    </div>
</body>
</html>
