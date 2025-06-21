<div class="flex items-center justify-center flex-col">
    <x-section-title>Client Testimonials</x-section-title>
    <p class="my-8 text-primary tracking-wider text-center">What Our Clients Say.</p>
    <div class="swiper w-full">
        <div class="swiper-wrapper">
            @foreach ($testimonials as $testimonial)
            <div class="swiper-slide !h-full">
                <div class="shadow rounded p-8 bg-primary/5 flex items-center justify-center flex-col h-full">
                    <div class="flex flex-col items-center justify-center">
                        @if($testimonial->client_photo)
                            <img src="{{ asset('storage/' . $testimonial->client_photo) }}" alt="{{ $testimonial->client_name }}" class="w-16 h-16 rounded-full object-cover mb-4">
                        @else
                            <div class="w-16 h-16 rounded-full bg-accent/10 flex items-center justify-center mb-4">
                                <span class="text-2xl text-accent">{{ substr($testimonial->client_name, 0, 1) }}</span>
                            </div>
                        @endif
                        <span class="font-bold text-accent text-xl">{{ $testimonial->client_name }}</span>
                        @if($testimonial->client_position)
                            <span class="text-sm text-gray-600 mt-1">{{ $testimonial->client_position }}</span>
                        @endif
                        <div class="flex items-center gap-1 mt-2">
                            @for($i = 0; $i < $testimonial->rating; $i++)
                                <span class="text-yellow-400">⭐</span>
                            @endfor
                        </div>
                    </div>
                    <p class="testimonial-text text-center my-4">"{{ $testimonial->content }}"</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-pagination mt-8"></div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiper = new Swiper('.swiper', {
            slidesPerView: 1,
            autoHeight: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            breakpoints: {
                512: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
            },
            loop: true,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            }
        });
    });
</script>