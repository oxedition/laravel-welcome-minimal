<footer {{ $attributes->merge(['class' => 'my-10 py-10 text-center text-xs']) }}>
    <div class="container mx-auto">
        {{ $slot }}
    </div>
</footer>