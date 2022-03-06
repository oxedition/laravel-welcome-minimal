<footer {{ $attributes->merge(['class' => 'my-10 py-10 text-center text-md text-gray-600']) }}>
    <div class="container mx-auto">
        {{ $slot }}
    </div>
</footer>