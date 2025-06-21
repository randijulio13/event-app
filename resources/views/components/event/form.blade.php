<div class="p-4" x-data="eventForm()">
    <div class="bg-white  sticky top-20 z-10">
        <div class="p-6 bg-secondary/30 border-secondary border-1 rounded mb-8">
            <x-stepper></x-stepper>
        </div>
    </div>

    <form @submit.prevent="submitForm">
        <x-event.step-data />
        <x-event.step-vendor />

        <div class="mt-6 flex">
            <button x-show="step > 1" @click.prevent="step--" type="submit"
                class="px-4 py-2 border border-accent text-accent hover:bg-accent/10 rounded-full hover:px-8 duration-200 flex items-center gap-2">
                Kembali
            </button>
            <button x-show="step < 3" type="submit"
                class="px-4 py-2 bg-accent text-white rounded-full hover:px-8 duration-200 flex items-center gap-2 ms-auto">
                Selanjutnya
            </button>
        </div>

    </form>
</div>