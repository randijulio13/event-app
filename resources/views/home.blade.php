<x-app-layout>
    <div>
        <x-navbar />
        <x-hero />

        <x-section class="py-12">
            <x-about />
        </x-section>

        <x-section class="bg-primary/5 py-12">
            <x-our-services />
        </x-section>

        <x-section class="py-12">
            <x-why-us-section />
        </x-section>

        <x-section class="bg-primary/5 py-12">
            <x-planner-section />
        </x-section>

        <x-section class="py-12">
            <x-testimonial-section />
        </x-section>

        <x-section class="py-12 bg-primary/5">
            <x-contact-section />
        </x-section>

        <x-footer />

        <x-scroll-to-top />
    </div>
</x-app-layout>