<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 border border-blue-200 bg-blue-200 hover:bg-blue-400 hover:border-blue-400 hover:shadow-xl text-black transition']) }}>
    {{ $slot }}
</button>