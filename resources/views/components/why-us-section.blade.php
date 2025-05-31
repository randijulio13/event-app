<div class="grid grid-cols-1 lg:grid-cols-3 items-center">
    <h1 class="uppercase text-4xl text-primary tracking-wider font-serif hidden lg:block">
        Why <br />Choose Us?
    </h1>
    <div class="lg:hidden">
        <x-section-title>Why Choose Us?</x-section-title>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 my-8 gap-8 w-full col-span-2">
        @foreach($reasons as $reason)
        <div>
            <h4 class="text-accent text-center font-bold text-xl">{{ $reason['title'] }}</h4>
            <p class="text-primary tracking-wider font-light text-center">{{ $reason['description'] }}</p>
        </div>
        @endforeach
    </div>
</div>