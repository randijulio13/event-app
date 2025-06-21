<div class="flex items-center justify-center flex-col">
    <x-section-title>Plan Smarter with Your Personal Wedding Dashboard</x-section-title>
    <div class="my-8">
        <p class="text-primary tracking-wider text-center">
            We don’t just organize — we empower you to take control of your event journey with a smart, easy-to-use planning tool.
        </p>
        <p class="text-primary tracking-wider text-center">
            When you choose us to plan your wedding, you’ll receive exclusive access to a personalized Wedding Planning Dashboard — designed to make your preparation smooth and stress-free.
        </p>
    </div>

    <div class="mt-4 lg:px-32">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 items-center">
            <img src="https://picsum.photos/1600/900" alt="Wedding Planning Dashboard" class="w-full h-auto rounded shadow-lg lg:hidden">
            <div>
                <div class="lg:px-4 flex flex-col gap-4 text-primary">
                    <h4 class="text-xl font-serif text-center lg:text-start">Key Features </h4>
                    @foreach($features as $feature)
                    <div class="flex flex-col items-center lg:items-start justify-center lg:justify-start">
                        <span class="flex gap-2 items-center font-semibold tracking-wider">
                            <x-icon name="bi-check-circle-fill" class="text-accent" /> {{ $feature['title'] }}
                        </span>
                        <span class="text-xs">{{ $feature['description'] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
            <img src="https://picsum.photos/1600/900" alt="Wedding Planning Dashboard" class="w-full h-auto rounded shadow-lg hidden lg:block">

        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiper = new Swiper(".swiper", {
            slidesPerView: 4,
            loop: true,
            spaceBetween: 30,
            autoplay: {
                delay: 3000
            }
        });
    })
</script>