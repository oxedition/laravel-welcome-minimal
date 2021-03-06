# Change color interface

During development or after installing Laravel Welcome Minimal, if you want to change the interface color without overwriting your views, you need to run.

```php
php artisan minimal:color
```
The [color listing](https://tailwindcss.com/docs/customizing-colors) comes from the [tainwindcss.com](https://tailwindcss.com) color palette.

# Header

You can put header with fix position. But you need to add some padding to body tag.

```blade
<x-ox.header.header class="fixed" />
```

# Footer

Footer without social networks en sub menu. 

```html
<x-ox.footer.footer>
    Copyright © {{ config('app.name', 'Laravel') }} - all rigths reserved for <a href="" class="underline">{{ config('app.name', 'Laravel') }}</a>
</x-ox-footer.footer>    
```

If you want to add menu zone. 

```html
<x-ox.footer.footer :menu="config('minimal.menu')">
    Copyright © {{ config('app.name', 'Laravel') }} - all rigths reserved for <a href="" class="underline">{{ config('app.name', 'Laravel') }}</a>
</x-ox-footer.footer>    
```

If you want to add social network link zone. 

```html
<x-ox.footer.footer :network="config('minimal.network')">
    Copyright © {{ config('app.name', 'Laravel') }} - all rigths reserved for <a href="https://laravel.com" class="underline">{{ config('app.name', 'Laravel') }}</a>
</x-ox-footer.footer>  
```

You can combine both variable to have a footer with menu and social network.

Supported social networks link are as follows
- facebook
- twitter
- instagram
- linkedin
- youtube
- github

Please see config/minimal.php inside your application folder.

# Components

## Accordion

<center>
<img src="/art/component-accordion.gif" width="75%">
</center>

```html
<x-ox.accordion>
    <x-slot:title>
        the first question is here ?
    </x-slot:title>
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
</x-ox.accordion>   
<x-ox.accordion>
    <x-slot:title>
        the second in this place !
    </x-slot:title>
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
</x-ox.accordion>   
```

## Button

4 styles of button exists for this template.

* primary
* secondary
* text
* black

## Columns

# Blocks

## Intruction block

You can transform the "introduction block" into three different variants 

### Introduction block with a single column of text

<img src="/art/block-introduction-single-column-desktop.png" alt="block introduction with a single column of text desktop version">

<img src="/art/block-introduction-single-column-mobile.png" alt="Block introduction with a single column mobile version" width="250">

```html
<x-ox.block.introduction>
    
    {{-- title --}}
    <x-slot:title class="my-6 strong">
    Introduction block without image <br>on a single column
    </x-slot>
    {{-- start slot --}}
    <p class="mb-6">
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
    </p>
    <x-ox.button.button class="my-4 mr-4 md:my-6 uppercase">
        Create an account
    </x-ox.button.button>
    <x-ox.button.button-text class="my-4 md:my-6 uppercase">
        Learn more
    </x-ox.button.button-text>
    {{-- end slot --}}        

</x-ox.block.introduction>
```

## Block testimonial

## Block argumentation

## Block price

# Icons

You can see the icon pack here [https://feathericons.com](https://feathericons.com) 

```html
<x-feathericon-alert-triangle/>
```

Please refer to the Blade Feather Icons & Blade Icons for additional functionality.

- https://github.com/brunocfalcao/blade-feather-icons, 
- https://github.com/blade-ui-kit/blade-icons

oxédition is a french publishing house based in the south of france. To find out more, visit our website [https://oxedit.io](https://oxedit.io)

[<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg> edition_ox](https://twitter.com/edition_ox)

