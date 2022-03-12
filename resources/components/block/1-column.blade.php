<div class="w-full md:w-2/3 mx-auto my-12 py-12 px-4 md:px-0">

    @isset($title)
        <h2 {{ $title->attributes->merge(['class'=>'text-2xl mb-6 uppercase text-center']) }}>
            {{ $title }}
        </h2>
    @endisset
    @isset($image)
        <img src="{{ $image }}" {{ $image->attributes->merge(['class'=>'mb-12 w-full mx-auto border border-8 border-blue-200 shadow-xl rounded-t-2xl']) }}>
    @endisset    
    @isset($slot)
        <div>
            {{ $slot }}
        </div>
    @endisset
    @isset($button)
        <div class="text-center">
            {{ $button }}
        </div>
    @endisset    
</div>