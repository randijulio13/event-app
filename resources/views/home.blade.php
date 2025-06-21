<x-app-layout>
    <x-navbar enableScroll="true" />
    <x-home.hero-section />

    <x-section class="py-12" id="about">
        <x-home.about-section />
    </x-section>

    <x-section class="bg-primary/5 py-12" id="service">
        <x-home.services-section />
    </x-section>

    <x-section class="py-12" id="portfolio">
        <x-home.why-us-section />
    </x-section>

    <x-section class="bg-primary/5 py-12">
        <x-home.planner-section />
    </x-section>

    <x-section class="py-12" id="testimonial">
        <x-home.testimonial-section />
    </x-section>

    <x-section class="py-12 bg-primary/5" id="contact">
        <x-home.team-section />
    </x-section>
    
    <x-section class="py-12" id="team">
        <x-home.contact-section />
    </x-section>

    <x-footer />
    
    <x-scroll-to-top />
</x-app-layout>