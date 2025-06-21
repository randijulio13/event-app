<div x-show="step === 2">
    <div class="mb-8">
        <h4 class="font-bold text-2xl lg:text-4xl text-accent">Vendor Data</h4>
        <p class="text-sm lg:text-base text-primary/70">Please select vendors for your event. You must select at least
            one vendor.</p>
        <div x-show="error.vendors.general" x-text="error.vendors.general" class="mt-2 text-sm text-red-600"></div>
    </div>

    <div class="w-full space-y-4">
        <template x-for="type in vendorTypes" :key="type.id">
            <div class="relative">
                <div :class="{
                    'border-2 border-accent': form.selectedVendors[type.id],
                    'border border-gray-200': !form.selectedVendors[type.id]
                }" class="p-6 rounded-lg bg-white shadow-sm hover:shadow-md transition-all cursor-pointer"
                    @click="openVendorModal(type.id)">
                    <!-- Status Indicator -->
                    <div :class="{
                        'bg-accent': form.selectedVendors[type.id],
                        'bg-gray-200': !form.selectedVendors[type.id]
                    }" class="absolute -top-2 -right-2 w-4 h-4 rounded-full border-2 border-white"></div>

                    <div class="flex items-start space-x-6">
                        <!-- Icon -->
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 flex items-center justify-center rounded-full bg-accent/10">
                                <i :class="type.icon" class="w-6 h-6 text-accent"></i>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="flex-1">
                            <div class="flex items-start justify-between">
                                <div>
                                    <h5 class="font-semibold text-lg" x-text="type.label"></h5>
                                    <p class="text-sm text-gray-600 mt-1" x-text="type.description"></p>
                                </div>
                                <div x-show="form.selectedVendors[type.id]" class="text-right">
                                    <p class="text-sm font-medium text-accent"
                                        x-text="formatPrice(form.selectedVendors[type.id]?.price)"></p>
                                </div>
                            </div>

                            <!-- Selected Vendor Info -->
                            <div x-show="form.selectedVendors[type.id]" class="mt-4 pt-4 border-t">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-sm font-medium text-gray-900"
                                            x-text="form.selectedVendors[type.id]?.name"></p>
                                        <p class="text-sm text-gray-600"
                                            x-text="form.selectedVendors[type.id]?.vendor.name"></p>
                                    </div>
                                    <button class="text-sm text-accent hover:text-accent/80 font-medium">
                                        Change Selection
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </div>


    <!-- Vendor Selection Modal -->
    <div x-show="showVendorModal" x-cloak class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title"
        role="dialog" aria-modal="true">
        <!-- Background overlay -->
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <!-- Modal panel -->
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div
                class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
                <!-- Close button -->
                <div class="absolute right-0 top-0 pr-4 pt-4">
                    <button @click="showVendorModal = false" type="button"
                        class="rounded-md bg-white text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Close</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Content -->
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left w-full">
                        <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">
                            Select <span x-text="currentVendorType"></span> Package
                        </h3>

                        <!-- Loading State -->
                        <div x-show="loading" class="flex items-center justify-center py-8">
                            <svg class="animate-spin h-8 w-8 text-accent" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                        </div>

                        <!-- Vendor List -->
                        <div x-show="!loading" class="mt-4 max-h-[60vh] overflow-y-auto">
                            <template
                                x-if="availableVendors[currentVendorType] && availableVendors[currentVendorType].length > 0">
                                <div class="divide-y divide-gray-200">
                                    <template x-for="item in availableVendors[currentVendorType]" :key="item.id">
                                        <div @click="selectVendor(item)"
                                            class="flex items-start p-4 hover:bg-gray-50 cursor-pointer transition-colors">
                                            <!-- Package Image -->
                                            <div class="flex-shrink-0 h-16 w-16">
                                                <template x-if="item.image">
                                                    <img :src="item.image" :alt="item.name"
                                                        class="h-16 w-16 rounded-lg object-cover">
                                                </template>
                                                <template x-if="!item.image">
                                                    <div
                                                        class="h-16 w-16 rounded-lg bg-gray-200 flex items-center justify-center">
                                                        <svg class="h-8 w-8 text-gray-400" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                        </svg>
                                                    </div>
                                                </template>
                                            </div>

                                            <!-- Package Info -->
                                            <div class="ml-4 flex-1">
                                                <div class="flex items-start justify-between">
                                                    <div>
                                                        <h4 class="text-sm font-medium text-gray-900"
                                                            x-text="item.name"></h4>
                                                        <p class="text-sm text-gray-500" x-text="item.vendor.name"></p>
                                                    </div>
                                                    <p class="text-sm font-medium text-accent"
                                                        x-text="formatPrice(item.price)"></p>
                                                </div>
                                                <p class="mt-1 text-sm text-gray-500" x-text="item.description"></p>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </template>
                            <template
                                x-if="!availableVendors[currentVendorType] || availableVendors[currentVendorType].length === 0">
                                <div class="text-center py-4 text-gray-500">
                                    No packages available for this category.
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>