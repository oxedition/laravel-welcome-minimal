<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 border border-black hover:bg-black hover:text-blue-100 hover:shadow-xl transition']) }}>
    {{ $slot }}
</button>