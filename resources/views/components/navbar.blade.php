@props(['enableScroll' => false])

<div
    id="navbar"
    x-data="navbarScroll({enableScroll:{{  $enableScroll ? 'true' : 'false' }}})"
    class="w-dvw px-8 lg:px-32 fixed duration-500 z-50 block"
    :class="scrolled
    ? 'bg-white backdrop-blur-xl h-16 shadow-lg text-primary shadow-primary/10'
    : 'bg-transparent h-28 text-white'">
    <div class="flex gap-8 items-center h-full">
        <a href="/#" class="flex items-center justify-center font-serif text-4xl">Alexa</a>

        <div class="ms-auto items-center gap-4 hidden lg:flex">
            <a href="/#about" class="flex items-center justify-center uppercase">About</a>
            <a href="/#service" class="flex items-center justify-center uppercase">Service</a>
            <a href="/#portfolio" class="flex items-center justify-center uppercase">Portfolio</a>
            <a href="/#contact" class="flex items-center justify-center uppercase">Contact</a>
        </div>
    </div>
</div>