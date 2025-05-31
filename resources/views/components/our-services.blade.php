<div class="flex items-center justify-center flex-col">
    <x-section-title>Our Services</x-section-title>
    <p class="my-8 text-primary tracking-wider text-center">Every event is personal — and so is our approach.</p>
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 w-full">
        @foreach($services as $service)
        <div class="w-full hover:scale-105 duration-300 hover:bg-white hover:shadow rounded border-primary/80 h-full text-primary p-4 flex flex-col items-center justify-center">
            <h4 class="font-bold mb-8 text-center font-cursive text-4xl">{{ $service['title'] }}</h4>
            <p class="tracking-wider font-light text-center">{{ $service['description'] }}</p>
        </div>
        @if(!$loop->last)
        <hr class="border-primary/10 lg:hidden" />
        @endif
        @endforeach
    </div>
</div>