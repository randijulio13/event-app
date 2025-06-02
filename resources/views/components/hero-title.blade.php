@props(['title' => ''])

<div class="bg-cover bg-center pt-16 h-48 lg:h-64 flex items-center justify-center text-white bg-[url('/img/hero.jpg')]">
    <div class="w-full h-full bg-gradient-to-b from-primary/50 from-50% to-primary flex items-center justify-center flex-col px-8 lg:px-0 gap-4">
        <h1 class="mb-0 font-cursive text-5xl lg:text-8xl text-center">{{ $title }}</h1>
    </div>
</div>