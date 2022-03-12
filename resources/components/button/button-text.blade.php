<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 border border-transparent hover:underline underline decoration-4 decoration-blue-200 hover:decoration-blue-400 transition']) }}>
    {{ $slot }}
</button>