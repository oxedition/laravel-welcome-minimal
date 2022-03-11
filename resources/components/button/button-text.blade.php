<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 border border-transparent hover:underline underline decoration-4 decoration-green-200 hover:decoration-green-400 transition']) }}>
    {{ $slot }}
</button>