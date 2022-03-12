@props([
    'network'=>null,
    'menu'=>null,
])

<footer {{ $attributes->merge(['class' => 'my-12 py-24 text-md text-black']) }}>
    <div class="flex flex-col container mx-auto">
        
        <!-- nav -->
        @isset($menu)
            <nav class="uppercase w-full">
                <ul class="flex flex-wrap justify-center">
                    @foreach($menu as $m)
                    <li class="py-6 px-6">
                        <a href="{{ $m['href'] }}" title="{{ $m['title'] }}">{{ $m['name'] }}</a>
                    </li>
                    @endforeach 
                </ul>
            </nav>
        @endisset
        <!-- nav -->

        <!-- networks -->
        @isset($network)
            <div class="my-24 flex flex-col justify-center items-center">
                <h6 class="uppercase bold mb-2">Follow us</h6>
                <ul class="flex">

                    @if(array_key_exists('facebook',$network))
                        <li class="px-2">
                            @if(isset($network['facebook']['href']))
                                <a 
                                    href="{{ $network['facebook']['href'] }}" 
                                    class="{{ isset($network['facebook']['target']) ? $network['facebook']['target']:null }}" 
                                    title="{{ isset($network['facebook']['title']) ? $network['facebook']['title']:null }}" 
                                >
                                    <x-feathericon-facebook/>
                                </a>
                            @endif
                        </li>
                    @endif

                    @if(array_key_exists('twitter',$network))
                        <li class="px-2">
                            @if(isset($network['twitter']['href']))
                                <a 
                                    href="{{ $network['twitter']['href'] }}" 
                                    class="{{ isset($network['twitter']['target']) ? $network['twitter']['target']:null }}" 
                                    title="{{ isset($network['twitter']['title']) ? $network['twitter']['title']:null }}" 
                                >
                                    <x-feathericon-twitter/>
                                </a>
                            @endif
                        </li>
                    @endif
                    
                    @if(array_key_exists('instagram',$network))
                        <li class="px-2">
                            @if(isset($network['instagram']['href']))
                                <a 
                                    href="{{ $network['instagram']['href'] }}" 
                                    class="{{ isset($network['instagram']['target']) ? $network['instagram']['target']:null }}" 
                                    title="{{ isset($network['instagram']['title']) ? $network['instagram']['title']:null }}" 
                                >
                                    <x-feathericon-instagram/>
                                </a>
                            @endif
                        </li>
                    @endif
                    
                    @if(array_key_exists('linkedin',$network))
                        <li class="px-2">
                            @if(isset($network['linkedin']['href']))
                                <a 
                                    href="{{ $network['linkedin']['href'] }}" 
                                    class="{{ isset($network['linkedin']['target']) ? $network['linkedin']['target']:null }}" 
                                    title="{{ isset($network['linkedin']['title']) ? $network['linkedin']['title']:null }}" 
                                >
                                    <x-feathericon-linkedin/>
                                </a>
                            @endif
                        </li>
                    @endif
                    
                    @if(array_key_exists('youtube',$network))
                        <li class="px-2">
                            @if(isset($network['youtube']['href']))
                                <a 
                                    href="{{ $network['youtube']['href'] }}" 
                                    class="{{ isset($network['youtube']['target']) ? $network['youtube']['target']:null }}" 
                                    title="{{ isset($network['youtube']['title']) ? $network['youtube']['title']:null }}" 
                                >
                                    <x-feathericon-youtube/>
                                </a>
                            @endif
                        </li>
                    @endif
                    
                    @if(array_key_exists('github',$network))
                        <li class="px-2">
                            @if(isset($network['github']['href']))
                                <a 
                                    href="{{ $network['github']['href'] }}" 
                                    class="{{ isset($network['github']['target']) ? $network['github']['target']:null }}" 
                                    title="{{ isset($network['github']['title']) ? $network['github']['title']:null }}" 
                                >
                                    <x-feathericon-github/>
                                </a>
                            @endif
                        </li>
                    @endif

                </ul>
            </div>
        @endisset
        <!-- networks -->
    </div>

    <!-- slot -->
    <div class="container mx-auto @if(!$network) mt-6 @endif text-center text-sm uppercase">
        {{ $slot }}
    </div>
    <!-- slot -->

</footer>