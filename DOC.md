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


# ICONS

You can see the icon pack here [https://feathericons.com](https://feathericons.com) 

```blade
<x-feathericon-alert-triangle/>
```

Please refer to the Blade Feather Icons & Blade Icons for additional functionality.

- https://github.com/brunocfalcao/blade-feather-icons, 
- https://github.com/blade-ui-kit/blade-icons
