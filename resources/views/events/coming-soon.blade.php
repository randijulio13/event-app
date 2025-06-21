<x-app-layout>
    <div class="min-h-screen flex items-center justify-center">
        <div class="text-center px-4">
            <img src="{{ asset('assets/soon.svg') }}" alt="Coming Soon" class="mx-auto w-full max-w-md mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Coming Soon</h1>
            <p class="text-gray-600 mb-8">We're working hard to bring you something amazing. Stay tuned!</p>
            <a href="{{ route('home') }}" class="bg-accent text-white px-6 py-3 rounded-full hover:px-10 duration-200">
                Back to Home
            </a>
        </div>
    </div>
</x-app-layout> 