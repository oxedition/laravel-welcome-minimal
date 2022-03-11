<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 border border-black bg-black hover:shadow-xl text-white transition']) }}>
    {{ $slot }}
</button>