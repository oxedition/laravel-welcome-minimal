<footer {{ $attributes->merge(['class' => 'my-10 py-10 text-center text-md text-gray-600']) }}>
    <div>
        <nav>
            <ul>
                <li>
                    <a href="">About us</a>
                </li>                
                <li>
                    <a href="">Privacy</a>
                </li>
                <li>
                    <a href="">Legal</a>
                </li>                
            </ul>
        </nav>
    </div>
    <div class="container mx-auto mt-10">
        {{ $slot }}
    </div>
</footer>