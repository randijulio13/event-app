<div
    x-data="{ show: false }"
    x-init="window.addEventListener('scroll', () => show = window.scrollY > 40)"
    x-show="show"
    x-transition.opacity
    class="fixed bottom-4 right-4 z-50">
    <button
        @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
        class="bg-primary text-white rounded-xl p-3 shadow-md hover:bg-primary/80 transition cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg"
            class="w-5 h-5" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <line x1="12" y1="19" x2="12" y2="5" />
            <polyline points="5 12 12 5 19 12" />
        </svg>
    </button>
</div>