<div 
    wire:key="vendor-selector"
    x-data="{ show: @entangle('show') }">
    <!-- Modal -->
    <div x-cloak 
         x-show="show" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 overflow-y-auto" 
         aria-labelledby="modal-title" 
         role="dialog" 
         aria-modal="true">
        
        <!-- Background overlay -->
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <!-- Modal panel -->
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div x-cloak 
                 x-show="show"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
                
                <!-- Close button -->
                <div class="absolute right-0 top-0 pr-4 pt-4">
                    <button wire:click="closeModal" type="button" class="rounded-md bg-white text-gray-400 hover:text-gray-500">
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
                            Select {{ $selectedType }} Vendor
                        </h3>
                        
                        <!-- Vendor List -->
                        <div class="mt-4 max-h-[60vh] overflow-y-auto">
                            @if(count($vendors) > 0)
                                <div class="divide-y divide-gray-200">
                                    @foreach($vendors as $vendor)
                                        <div wire:key="{{ $vendor->id }}" 
                                             wire:click="selectVendor({{ $vendor->id }})"
                                             class="flex items-center p-4 hover:bg-gray-50 cursor-pointer transition-colors">
                                            <!-- Vendor Image -->
                                            <div class="flex-shrink-0 h-12 w-12">
                                                @if($vendor->images && count($vendor->images) > 0)
                                                    <img src="{{ $vendor->images[0] }}" alt="{{ $vendor->name }}" class="h-12 w-12 rounded-full object-cover">
                                                @else
                                                    <div class="h-12 w-12 rounded-full bg-gray-200 flex items-center justify-center">
                                                        <svg class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                        </svg>
                                                    </div>
                                                @endif
                                            </div>
                                            
                                            <!-- Vendor Info -->
                                            <div class="ml-4">
                                                <p class="text-sm font-medium text-gray-900">{{ $vendor->name }}</p>
                                                <p class="text-sm text-gray-500">{{ $vendor->description }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="text-center py-4 text-gray-500">
                                    No vendors available for this category.
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 