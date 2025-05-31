<div class="flex items-center justify-center flex-col">
    <x-section-title>Client Testimonials</x-section-title>
    <p class="my-8 text-primary tracking-wider text-center">What Our Clients Say.</p>
    <div class="swiper w-full">
        <div class="swiper-wrapper">
            @foreach ($testimonials as $testimonial)
            <div class="swiper-slide">
                <div class="shadow rounded p-8 bg-primary/5 flex items-center justify-center flex-col">
                    <div class="flex flex-col items-center justify-center">
                        <img src="https://picsum.photos/700/700" alt="{{ $testimonial['author'] }}" class="w-16 h-16 rounded-full mb-4">
                        <span class="font-bold text-accent text-xl">{{ $testimonial['author'] }}</span>
                    </div>
                    <p class="testimonial-text text-center my-4">"{{ $testimonial['content'] }}"</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiper = new Swiper('.swiper', {
            slidesPerView: 1,
            autoplay: {
                delay: 2500
            },
            breakpoints: {

                512: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 20
                },
            },
            loop: true,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });
</script>