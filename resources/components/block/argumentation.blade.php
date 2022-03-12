<section class="w-full bg-black mx-auto mt-6 @isset($image) mt-48 @endisset pt-6 block text-blue-100 relative">
    <div class="w-full md:w-2/3 mx-auto my-6 py-6 px-4 md:px-0 relative">
        @isset($image)
            <img src="{{ $image }}" class="mb-6 -top-48 relative border border-8 border-blue-200 rounded-t-2xl shadow-xl shadow-blue-900 ">
        @endisset
        @isset($title)
            @isset($image)
            <h3 {{ $title->attributes->merge(['class'=>'text-2xl uppercase text-blue-100 -top-24 relative']) }}>
                {{ $title }}
            </h3>
            @else
            <h3 {{ $title->attributes->merge(['class'=>'text-2xl uppercase text-blue-100']) }}>
                {{ $title }}
            </h3>

            @endisset
        @endisset
        <div class="@isset($image) relative -top-12 @endisset">
            {{ $slot }}
        </div>
        @isset($button)
        <div {{ $button->attributes->merge(['class'=>'mb-12']) }}>
            {{ $button }}
        </div>
        @endisset        
    </div>
</section>