<div class="w-full overview-auto">
    <div class="px-10 py-6 bg-secondary hidden lg:block">
        <ol class="relative border-primary border-s">
            @foreach($steps as $step)
            @if($step['active'])
            <li class="mb-10 ms-6 flex">
                <span class="absolute flex items-center justify-center w-8 h-8 bg-primary rounded-full -start-4 ring-primary">
                    <x-icon name="{{ $step['icon'] }}" class="text-secondary" />
                </span>
                <h3 class="text-primary text-sm leading-tight mt-2">{{ $step['label']}} </h3>
            </li>
            @else
            <li class="mb-10 ms-6 flex">
                <span class="absolute flex items-center justify-center w-8 h-8 bg-secondary rounded-full outline outline-primary -start-4">
                    <x-icon name="{{ $step['icon'] }}" class="text-primary" />
                </span>
                <h3 class="text-primary text-sm leading-tight mt-2">{{ $step['label']}} </h3>
            </li>
            @endif
            @endforeach
        </ol>
    </div>





    <ol class="flex items-center max-w-screen text-xs text-center text-white sm:text-base lg:hidden w-full overview-scroll-x p-4 bg-secondary justify-center">
        @foreach($steps as $step)
        @if($step['active'])
        <li class="flex md:w-full items-center text-primary font-bold sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-primary/80 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10">
            <span class="flex items-center after:mx-2 after:text-primary @if(!$loop->last) after:content-['/']  @endif gap-1">
                <x-icon name="{{ $step['icon'] }}" />
                {{ $step['label'] }}
            </span>
        </li>
        @else
        <li class="flex md:w-full items-center text-primary/40 font-light sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-primary/80 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10">
            <span class="flex items-center after:mx-2 after:text-primary/40 @if(!$loop->last) after:content-['/']  @endif gap-1">
                <x-icon name="{{ $step['icon'] }}" />
                {{ $step['label'] }}
            </span>
        </li>
        @endif
        @endforeach

    </ol>



</div>