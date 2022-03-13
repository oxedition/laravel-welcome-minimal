<x-guest-layout>
    <div class="pt-4">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-ox.button.button-text onclick="window.location.href='/'" href="/" class="my-4 md:my-6 uppercase">
                    back home
                </x-ox.button.button-text> 
            </div>
            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose text-black">
                <h1 class="text-center">
                    FAQS
                    <small class="block">Most frequent questions</small>
                </h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, <a href="">sed diam nonummy</a> nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </p>
                <x-ox.accordion>
                    <x-slot:title>
                        Lorem ipsum dolor sit amet
                    </x-slot:title>
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </x-ox.accordion>               
                <x-ox.accordion>
                    <x-slot:title>
                        Lorem ipsum dolor sit amet
                    </x-slot:title>
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </x-ox.accordion>               

            </div>
        </div>
    </div>
    <x-ox.footer.footer>
        Copyright © {{ config('app.name', 'Laravel') }} - all rigths reserved for <a href="https://laravel.com" class="underline">{{ config('app.name', 'Laravel') }}</a>
    </x-ox-footer.footer>  
</x-guest-layout>
