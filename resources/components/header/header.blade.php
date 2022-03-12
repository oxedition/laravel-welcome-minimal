<header {{ $attributes->merge(['class' => 'w-full flex items-center py-6 px-6 mb-4 shadow-xl']) }}>
    <div class="w-1/4 flex-1">
     <a href="/" class="text-sm lg:text-2xl">LOGOTYPE</a>
    </div>
    <nav class="w-3/4 flex justify-end items-center uppercase text-sm">
     <ul class="flex items-center">
         <li class="border-r border-r-black pr-6 hidden md:block">
             <a href="/">Documentation</a>
         </li>
         @if (Route::has('login'))
             @auth
                 <li class="ml-6">
                     <a href="{{ url('/dashboard') }}">Dashboard</a>    
                 </li>
             @else
                 <li class="ml-6">
                     <a href="{{ route('login') }}">Sign In</a>
                 </li>
                 <li class="ml-6">
                     <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 border border-black hover:bg-black hover:text-blue-100 hover:shadow-xl transition">
                        Create account
                     </a>                             
                 </li>                    
             @endauth
         @endif
     </ul>
    </nav>
</header>