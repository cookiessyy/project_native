<?php include 'koneksi.php'; ?>
<?php include 'header.php'; ?>

    <div class="flex w-full max-w-4xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
        <!-- Left Side (Form) -->
        <div class="w-1/2 p-8">
            <div class="mb-8 text-center">
                <h1 class="text-3xl font-semibold text-gray-900 dark:text-white">Sign in to your account</h1>
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Not a member? <a href="#" class="text-indigo-500">Start a 14 day free trial</a></p>
            </div>
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email address</label>
                    <input type="email" id="email" name="email" class="mt-1 px-4 py-2 w-full bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                    <input type="password" id="password" name="password" class="mt-1 px-4 py-2 w-full bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" required>
                </div>
                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox text-indigo-500 dark:bg-gray-700 dark:border-gray-600">
                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">Remember me</span>
                    </label>
                    <a href="#" class="text-sm text-indigo-500">Forgot password?</a>
                </div>
                <div class="mt-6">
                    <button type="submit" class="w-full px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Sign in</button>
                </div>
            </form>
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-500 dark:text-gray-400">Or continue with</p>
                <div class="mt-4 flex items-center justify-center space-x-4">
                    <a href="#" class="w-1/2 px-4 py-2 bg-white dark:bg-gray-700 border dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-100 dark:hover:bg-gray-600">Google</a>
                    <a href="#" class="w-1/2 px-4 py-2 bg-white dark:bg-gray-700 border dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-md hover:bg-gray-100 dark:hover:bg-gray-600">GitHub</a>
                </div>
            </div>
        </div>

        <!-- Right Side (Image) -->
        <div class="w-1/2 bg-gray-100 dark:bg-gray-700">
            <img src="pict/isagi.jpg" alt="Desk Image" class="object-cover w-full h-full">
        </div>
    </div>
</body>
<?php include 'footer.php'; ?>
</html>
