@isset($inverse)
@else
    @php
        $inverse = false;
    @endphp
@endisset
<figure {{ $attributes->merge(['class' => 'w-full ' .( $inverse ? ' bg-black text-green-200 py-24 shadow-xl':'py-12')]) }}>

    @isset($image)
        @if(trim($image) !== '')
            <img src="{{ $image }}" class="w-32 h-32 object-cover mx-auto border border-8 border-green-200 shadow-xl rounded-full mb-12">
        @endif
    @endisset

    <blockquote class="w-1/3 mx-auto text-4xl text-center mb-6">
        {{ $slot }}
    </blockquote>

    @isset($author)
        <figcaption class="text-center text-xl">
            {{ $author }}
        </figcaption>
    @endisset

</figure>