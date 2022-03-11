<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 border border-green-200 bg-green-200 hover:bg-green-400 hover:border-green-400 hover:shadow-xl text-black transition']) }}>
    {{ $slot }}
</button>