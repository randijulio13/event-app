<ol class="flex items-center w-full text-sm font-medium text-center text-secondary sm:text-base">
    <li class="flex md:w-full items-center sm:after:content-[''] after:w-full after:h-0.5 after:rounded-full after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10"
        :class="{'text-accent after:bg-secondary': step === 1, 'after:bg-primary text-primary': step > 1}">
        <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200">
            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            Event <span class="hidden sm:inline-flex sm:ms-2">Data</span>
        </span>
    </li>
    <li class="flex md:w-full items-center after:content-[''] after:w-full after:h-0.5 after:bg-secondary after:rounded-full after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10"
        :class="{'text-accent': step === 2, 'text-primary': step > 2}">
        <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200">
            <span class="me-2">2</span>
            Vendor <span class="hidden sm:inline-flex sm:ms-2">Data</span>
        </span>
    </li>
    <li class="flex items-center">
        <span class="me-2">3</span>
        Confirmation
    </li>
</ol>