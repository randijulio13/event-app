<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="text-center px-4">
        <img src="{{ asset('assets/notfound.svg') }}" alt="Page Not Found" class="mx-auto w-full max-w-md mb-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Page Not Found</h1>
        <p class="text-gray-600 mb-8">The page you are looking for might have been removed or is temporarily unavailable.</p>
        <a href="{{ route('home') }}" class="bg-accent text-white px-6 py-3 rounded-full hover:px-10 duration-200">
            Back to Home
        </a>
    </div>
</body>
</html> 