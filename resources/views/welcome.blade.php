<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel welcome minimal</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <style>
            body {
                font-family: 'Space Grotesk', sans-serif;
                font-weight: 400;
            }
            .bold {
                font-weight: 600;
            }
        </style>
    </head>
    <body class=" bg-blue-100">
        
        <x-ox.header.header/>
        <hr>
    {{-- start block.introduction --}}
    <x-ox.block.introduction>
        
        {{-- title --}}
        <x-slot:title class="my-6 strong">
           title with nothing but with button max
        </x-slot>
        {{-- start slot --}}
        <p class="mb-6">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
        </p>
        <x-ox.button.button class="my-4 md:my-6 uppercase">
            button
        </x-ox.button.button>
        <x-ox.button.button-text class="my-4 md:my-6 uppercase">
            button text
        </x-ox.button.button-text>
        <x-ox.button.button-primary class="my-4 md:my-6 uppercase">
            button primary
        </x-ox.button.button-primary>   
        <x-ox.button.button-secondary class="my-4 md:my-6 uppercase">
            button secondary
        </x-ox.button.button-secondary>        
        {{-- end slot --}}        

    </x-ox.block.introduction>
    {{-- end block.introduction --}}
    <hr>       
    {{-- start block.introduction --}}
    <x-ox.block.introduction>
        
        {{-- title --}}
        <x-slot:title class="my-6 strong">
           title with paysage image
        </x-slot>
        
        {{-- image --}}
        <x-slot:image class="border border-8 border-blue-200">
            /images/deon-black-M5p7exr1gUg-unsplash-2.jpg
        </x-slot:image>

        {{-- start slot --}}
        <p class="mb-6">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
        </p>
        <x-ox.button.button class="my-4 md:my-6 uppercase mr-6">
            button
        </x-ox.button.button>
        <x-ox.button.button-text class="my-4 md:my-6 uppercase">
            button text
        </x-ox.button.button-text>
        <x-ox.button.button-primary class="my-4 md:my-6 uppercase">
            button primary
        </x-ox.button.button-primary>   
        <x-ox.button.button-secondary class="my-4 md:my-6 uppercase">
            button secondary
        </x-ox.button.button-secondary>        
        {{-- end slot --}}        

    </x-ox.block.introduction>
    {{-- end block.introduction --}}

    <hr>

    {{-- start block.introduction --}}
    <x-ox.block.introduction>
        
        {{-- title --}}
        <x-slot:title class="my-6 strong">
           title with paysage image
        </x-slot>
        
        {{-- image --}}
        <x-slot:image class="border border-8 border-blue-200">
            /images/deon-black-M5p7exr1gUg-unsplash-2.jpg
        </x-slot:image>

        {{-- start slot --}}
        <p class="mb-6">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
        </p>
        <x-ox.button.button class="my-4 md:my-6 uppercase mr-6">
            button
        </x-ox.button.button>
        <x-ox.button.button-text class="my-4 md:my-6 uppercase">
            button text
        </x-ox.button.button-text>      
        {{-- end slot --}}        

    </x-ox.block.introduction>
    {{-- end block.introduction --}}
    <hr>

    {{-- start block.introduction --}}
    <x-ox.block.introduction>
        
        {{-- title --}}
        <x-slot:title class="my-6 strong">
           title with portrait image
        </x-slot>
        
        {{-- image --}}
        <x-slot:image class="border border-8 border-blue-200">
            /images/brian-kyed-P7EFJs577Xg-unsplash.jpg
        </x-slot:image>

        {{-- start slot --}}
        <p class="mb-6">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
        </p>
        <x-ox.button.button class="my-4 md:my-6 uppercase mr-6">
            button
        </x-ox.button.button>
        <x-ox.button.button-text class="my-4 md:my-6 uppercase">
            button text
        </x-ox.button.button-text>
        {{-- end slot --}}        

    </x-ox.block.introduction>
    {{-- end block.introduction --}}
    <hr>    

    {{-- start block.introduction --}}
    <x-ox.block.introduction>
        
        {{-- title --}}
        <x-slot:title class="my-6 strong">
           title with square image
        </x-slot>
        
        {{-- image --}}
        <x-slot:image class="border border-8 border-blue-200">
            /images/alvan-nee-iW8WH1Z5bFA-unsplash.jpg
        </x-slot:image>

        {{-- start slot --}}
        <p class="mb-6">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
        </p>
        <x-ox.button.button class="my-4 md:my-6 uppercase mr-6">
            button
        </x-ox.button.button>
        <x-ox.button.button-text class="my-4 md:my-6 uppercase">
            button text
        </x-ox.button.button-text>   

    </x-ox.block.introduction>
    {{-- end block.introduction --}}
    <hr>    

    <x-ox.block.argumentation>
        <x-slot:image>
            /images/michal-kubalczyk-tdMu8W9NTnY-unsplash.jpg
        </x-slot:image>
        <x-slot:title class="text-center"> Lorem ipsum dolor sit amet !<br> sed diam !</x-slot:title>
        <x-ox.columns>
            <x-ox.column>
                <x-slot:icon>
                    <x-feathericon-alert-triangle class="mx-auto" height="48" width="48" />
                </x-slot:icon>
                <x-slot:title>
                    Lorem ipsum dolor sit amet
                </x-slot:title>
                <x-slot:content>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </x-slot:content>
            </x-ox.column>
            <x-ox.column>
                <x-slot:icon>
                    <x-feathericon-crosshair class="mx-auto" height="48" width="48" />
                </x-slot:icon>
                <x-slot:title>
                    Lorem ipsum dolor sit amet
                </x-slot:title>
                <x-slot:content>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </x-slot:content>
            </x-ox.column>  
            <x-ox.column>
                <x-slot:icon>
                    <x-feathericon-award class="mx-auto" height="48" width="48" />
                </x-slot:icon>
                <x-slot:title>
                    Lorem ipsum dolor sit amet
                </x-slot:title>
                <x-slot:content>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </x-slot:content>
            </x-ox.column>  
            <x-ox.column>
                <x-slot:icon>
                    <x-feathericon-gift class="mx-auto" height="48" width="48" />
                </x-slot:icon>
                <x-slot:title>
                    Lorem ipsum dolor sit amet
                </x-slot:title>
                <x-slot:content>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </x-slot:content>
            </x-ox.column>                                    
        </x-ox.columns>
    </x-ox.block.argumentation>
    <hr>
    <x-ox.block.argumentation>
        <x-slot:title class="text-center"> Lorem ipsum dolor sit amet !<br> Sed diam !</x-slot:title>
        <x-ox.columns>
            <x-ox.column>
                <x-slot:icon>
                    <x-feathericon-alert-triangle class="mx-auto" height="48" width="48" />
                </x-slot:icon>
                <x-slot:title>
                    Lorem ipsum dolor sit amet
                </x-slot:title>
                <x-slot:content>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </x-slot:content>
            </x-ox.column>
            <x-ox.column>
                <x-slot:icon>
                    <x-feathericon-crosshair class="mx-auto" height="48" width="48" />
                </x-slot:icon>
                <x-slot:title>
                    Lorem ipsum dolor sit amet
                </x-slot:title>
                <x-slot:content>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </x-slot:content>
            </x-ox.column>  
            <x-ox.column>
                <x-slot:icon>
                    <x-feathericon-award class="mx-auto" height="48" width="48" />
                </x-slot:icon>
                <x-slot:title>
                    Lorem ipsum dolor sit amet
                </x-slot:title>
                <x-slot:content>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </x-slot:content>
            </x-ox.column>                                
        </x-ox.columns>
        <x-slot:button class="text-center">
            <x-ox.button.button-secondary class="my-4 md:my-6 uppercase">
                button secondary
            </x-ox.button.button-secondary>  
        </x-slot:button>
    </x-ox.block.argumentation>

    <hr>
    <x-ox.block.1-column>
        <x-slot:title>
            Lorem ipsum dolor sit amet
        </x-slot:title>
        <x-slot:image>
            /images/michal-kubalczyk-tdMu8W9NTnY-unsplash.jpg
        </x-slot:image>
        {{-- Start $slot  --}}

        <p class="mb-6">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        <x-slot:button class="text-center">
            <x-ox.button.button-secondary class="my-4 md:my-6 uppercase mr-6">
                button secondary
            </x-ox.button.button-secondary> 
            <x-ox.button.button-primary class="my-4 md:my-6 uppercase">
                button primary
            </x-ox.button.button-primary>   
            <x-ox.button.button-text class="my-4 md:my-6 uppercase">
                button text
            </x-ox.button.button-text> 
            <x-ox.button.button class="my-4 md:my-6 uppercase">
                button
            </x-ox.button.button>
        </x-slot:button>

        {{-- end $slot  --}}
    </x-ox.block.1-column>
    <hr>
    <x-ox.block.1-column>
        <x-slot:title>
            Lorem ipsum dolor sit amet
        </x-slot:title>
        {{-- Start $slot  --}}

        <p class="mb-6">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        <x-slot:button class="text-center">
            <x-ox.button.button-secondary class="my-4 md:my-6 uppercase mr-6">
                button secondary
            </x-ox.button.button-secondary> 
            <x-ox.button.button-primary class="my-4 md:my-6 uppercase">
                button primary
            </x-ox.button.button-primary>   
            <x-ox.button.button-text class="my-4 md:my-6 uppercase">
                button text
            </x-ox.button.button-text> 
            <x-ox.button.button class="my-4 md:my-6 uppercase">
                button
            </x-ox.button.button>
        </x-slot:button>

        {{-- end $slot  --}}
    </x-ox.block.1-column>
    <hr>

    <x-ox.block.1-column>
        <x-slot:title>
            Lorem ipsum dolor sit amet
        </x-slot:title>
        <x-slot:image class="w-2/3">
            /images/michal-kubalczyk-tdMu8W9NTnY-unsplash.jpg
        </x-slot:image>
        {{-- Start $slot  --}}

        <x-slot:button class="text-center">
            <x-ox.button.button-secondary class="my-4 md:my-6 uppercase mr-6">
                button secondary
            </x-ox.button.button-secondary> 
            <x-ox.button.button-primary class="my-4 md:my-6 uppercase">
                button primary
            </x-ox.button.button-primary>   
            <x-ox.button.button-text class="my-4 md:my-6 uppercase">
                button text
            </x-ox.button.button-text> 
            <x-ox.button.button class="my-4 md:my-6 uppercase">
                button
            </x-ox.button.button>
        </x-slot:button>

        {{-- end $slot  --}}
    </x-ox.block.1-column>
    <hr>
    <x-ox.block.1-column>
        <x-slot:title>
            Lorem ipsum dolor sit amet
        </x-slot:title>
        {{-- Start $slot  --}}

        <p class="mb-6">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

        {{-- end $slot  --}}

        <x-slot:button class="text-center">
            <x-ox.button.button-secondary class="my-4 md:my-6 uppercase mr-6">
                button secondary
            </x-ox.button.button-secondary> 
            <x-ox.button.button-primary class="my-4 md:my-6 uppercase">
                button primary
            </x-ox.button.button-primary>   
            <x-ox.button.button-text class="my-4 md:my-6 uppercase">
                button text
            </x-ox.button.button-text> 
            <x-ox.button.button class="my-4 md:my-6 uppercase">
                button
            </x-ox.button.button>
        </x-slot:button>

    </x-ox.block.1-column>
    <hr>
    <x-ox.block.1-column>
        <x-slot:title>
            Lorem ipsum dolor sit amet
        </x-slot:title>
        {{-- Start $slot  --}}
        <x-ox.columns>
            <x-ox.column>
                <x-slot:content>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                </x-slot:content>
            </x-ox.column>
            <x-ox.column>
                <x-slot:content>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                </x-slot:content>
            </x-ox.column>                           
        </x-ox.columns>
        {{-- end $slot  --}}
        <x-slot:button class="text-center">
            <x-ox.button.button-secondary class="uppercase">
                button secondary
            </x-ox.button.button-secondary> 
        </x-slot:button>

    </x-ox.block.1-column>    
    <hr>

    <x-ox.block.testimonial>
        <x-slot:image>/images/valerie-lendel-0b_7r_dNjFs-unsplash.jpg</x-slot:image>

        Quotes, parts of poems can also be a part of figure.

        <x-slot:author>
            Jhon Deo
            <small class="block text-sm">Company</small>
        </x-slot:author>
    </x-ox.block.testimonial>
    <hr>

    <x-ox.block.testimonial  :inverse="true">
        <x-slot:image>/images/valerie-lendel-0b_7r_dNjFs-unsplash.jpg</x-slot:image>

        Quotes, parts of poems can also be a part of figure.

        <x-slot:author>
            Jhon Deo
            <small class="block text-sm">Company</small>
        </x-slot:author>
    </x-ox.block.testimonial>
    <hr>    

    <x-ox.block.testimonial :inverse="true">
        <x-slot:image>/images/valerie-lendel-0b_7r_dNjFs-unsplash.jpg</x-slot:image>
        <x-slot:author>
            Jhon Deo 
            <small class="block text-sm">Company</small>
        </x-slot:author>
    </x-ox.block.testimonial>
    <hr>    

    <x-ox.block.testimonial  :inverse="true">
        Quotes, parts of poems can also be a part of figure.
        <x-slot:author>
            Jhon Deo
            <small class="block text-sm">Company</small>
        </x-slot:author>
    </x-ox.block.testimonial>
    <hr>

    <x-ox.block.testimonial  :inverse="true">
        Quotes, parts of poems can also be a part of figure.
        <x-slot:author>
            Jhon Deo
        </x-slot:author>
    </x-ox.block.testimonial>
    <hr>    

    <x-ox.block.testimonial :inverse="true">
        Quotes, parts of poems can also be a part of figure.
        <x-slot:author>
            <small class="block text-sm">Company</small>
        </x-slot:author>
    </x-ox.block.testimonial>
    <hr>

    @php
    /*
     cela va dans le config : 
       - facebook
       - twitter
       - instagram
       - linkedin
       - youtube
       - github
    */
    $network = [
        'facebook'=>[
            'href'=>'https://facebook.com',
            'target'=>'_blank',
            'title'=>'mon titre xxxxx'
        ],
        'twitter'=>[
            'href'=>'https://twitter.com',
            'target'=>'_blank',
            'title'=>'mon titre xxxxx'
        ],
        'instagram'=>[
            'href'=>'https://instagram.com',
            'target'=>'_blank',
            'title'=>'mon titre xxxxx'
        ],
        'linkedin'=>[
            'href'=>'https://linkedin.com',
            'target'=>'_blank',
            'title'=>'mon titre xxxxx'
        ],
        'youtube'=>[
            'href'=>'https://youtube.com',
            'target'=>'_blank',
            'title'=>'mon titre xxxxx'
        ],
        'github'=>[
            'href'=>'https://github.com',
            'target'=>'_blank',
            'title'=>'mon titre xxxxx'
        ],                                
    ];

    $menu = [
        'about'=> [
            'href',
            'title',
            'name',
        ]
    ]

    @endphp

    <x-ox.footer.footer :network="$network">
        Copyright © {{ config('app.name', 'Laravel') }} - all rigths reserved for <a href="" class="underline">{{ config('app.name', 'Laravel') }}</a>
    </x-ox-footer.footer>

    <x-ox.footer.footer>
        Copyright © {{ config('app.name', 'Laravel') }} - all rigths reserved for <a href="" class="underline">{{ config('app.name', 'Laravel') }}</a>
    </x-ox-footer.footer>    
    
    </body>
</html>