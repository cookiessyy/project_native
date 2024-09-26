<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script>
        // Script untuk mendeteksi preferensi mode gelap secara otomatis
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>
<body class="bg-gray-900 dark:bg-gray-900">

<?php include 'koneksi.php'; ?>

<div class="flex w-full max-w-4xl mx-auto bg-gray-800 dark:bg-gray-800 rounded-lg shadow-md overflow-hidden mt-10">
    <!-- Left Side (Form) -->
    <div class="w-1/2 p-8">
        <div class="mb-8 text-center">
            <h1 class="text-3xl font-semibold text-gray-100">Sign in to your account</h1>
            <p class="mt-2 text-sm text-gray-400">
                Not a member? <a href="#" class="text-indigo-500">Start a 14-day free trial</a>
            </p>
        </div>
        <form action="#" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-300">Email address</label>
                <input type="email" id="email" name="email" class="mt-1 px-4 py-2 w-full bg-gray-700 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-300">Password</label>
                <input type="password" id="password" name="password" class="mt-1 px-4 py-2 w-full bg-gray-700 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" required>
            </div>
            <div class="flex items-center justify-between">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox text-indigo-500 bg-gray-700 border-gray-600">
                    <span class="ml-2 text-sm text-gray-400">Remember me</span>
                </label>
                <a href="#" class="text-sm text-indigo-500">Forgot password?</a>
            </div>
            <div class="mt-6">
                <button type="submit" class="w-full px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Sign in</button>
            </div>
        </form>
        <div class="mt-6 text-center">
            <p class="text-sm text-gray-400">Or continue with</p>
            <div class="mt-4 flex items-center justify-center space-x-4">
                <a href="#" class="w-1/2 px-4 py-2 bg-gray-700 border border-gray-600 text-gray-300 rounded-md hover:bg-gray-600">Google</a>
                <a href="#" class="w-1/2 px-4 py-2 bg-gray-700 border border-gray-600 text-gray-300 rounded-md hover:bg-gray-600">GitHub</a>
            </div>
        </div>
    </div>

    <!-- Right Side (Image) -->
    <div class="w-1/2 bg-gray-700">
        <img src="pict/isagi.jpg" alt="Desk Image" class="object-cover w-full h-full">
    </div>
</div>

<!-- Simple Footer -->
<footer class="mt-8 bg-gray-900 py-6">
    <div class="max-w-4xl mx-auto text-center">
        <p class="text-sm text-gray-400">&copy; 2024 Your Company. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
