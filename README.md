# Laravel welcome minimal template

Laravel welcome minimal is a replacement template for Laravel Welcome Page and Page for your saas app (about, faqs, support, terms and privacy pages)

## Installation

You can install the package via composer:

```bash
composer require oxedition/laravel-welcome-minimal
```

## Usage

This package required Laravel Jetstream Livewire. 

**This package not working with Laravel Breeze or Laravel Jetstream Inertiajs**

```php
php artisan minimal:install
npm install
npm run watch
```

If you want to change the color of the interface. 

```php
php artisan minimal:color
```

Please check [DOCUMENTATION](DOC.md) for more information.

### Next releasez will include

- mobile version
- change color for jeatstream color
- add route for page

### Credits

Thanks to https://github.com/brunocfalcao/blade-feather-icons for blade feather icons, [https://feathericons.com](https://feathericons.com) and https://github.com/blade-ui-kit/blade-icons
https://tailwindcss.com

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email os@oxedit.io instead of using the issue tracker.

## Credits

-   [oxedition](https://github.com/oxedition)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
