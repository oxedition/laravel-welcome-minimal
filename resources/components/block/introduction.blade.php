@props([
    'title',
    'image',
    'invert'=>false
])
<section class="w-full md:w-2/3 mx-auto my-12 py-12 px-4 md:px-0">
    <div class="flex flex-wrap  @if($invert) flex-row-reverse @else flex-row @endif items-center">
        <div class="@isset($image) w-full md:w-2/3 @else w-full @endif text-xl px-12">
            @if($title)
                <h2 {{ $title->attributes->merge(['class'=>'text-4xl uppercase']) }}>
                    {{ $title }}
                </h2>
            @endif            
            {{ $slot }}
        </div>
        @isset($image)
            <div class="w-2/3 mx-auto md:w-1/3 p-2">
                <img src="{{ $image }}" {{ $image->attributes->merge(['class'=>'w-full rounded-t-full shadow-2xl']) }}>
            </div>
        @endif
    </div>
</section>