# CHANGE COLOR

If you want to change the color. 

```php
php artisan minimal:color
```

You can refer to the [color listing](https://tailwindcss.com/docs/customizing-colors) of [tainwindcss.com](https://tailwindcss.com)

# HEADER

You can put header with fix position. But you need to add some padding to body tag.

```blade
<x-ox.header.header class="fixed" />
```

# FOOTER

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

Please see config/minimal.php inside your application.

# COMPONENTS

## Accordion

```blade
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

# BLOCKS

## Block intruction

LE bloc introduction permet à vos futurs clients de conprendre le concept de votre logiciel d'un coup d'oeil. Vous pouvez l'inviterà s'inscrire ou à consulter de plus ample information. 

### introduction single column

<img src="/art/block-introduction-single-column-desktop.png" alt="">

<img src="/art/block-introduction-single-column-mobile.png" alt="">

```blade
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

# ICONS

You can see the icon pack here [https://feathericons.com](https://feathericons.com) 

```blade
<x-feathericon-alert-triangle/>
```

Please refer to the Blade Feather Icons & Blade Icons for additional functionality.

- https://github.com/brunocfalcao/blade-feather-icons, 
- https://github.com/blade-ui-kit/blade-icons
