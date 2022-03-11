<div  {{ $attributes->merge(['class' => 'p-4']) }}>
    @isset($icon)
    <div class="text-center mb-6">
        {{ $icon }}
    </div>
    @endisset
    @isset($title)
        <h4 class="text-xl bold mb-3">
            {{ $title }}
        </h4>
    @endisset    
    @isset($content)
        <p>
            {{ $content }}
        </p>
    @endisset    
</div>