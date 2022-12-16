
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# A trait to make Eloquent models translatable

[![Latest Version on Packagist](https://img.shields.io/packagist/v/taxionus/laravel-translatable.svg?style=flat-square)](https://packagist.org/packages/taxionus/laravel-translatable)
[![MIT Licensed](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/taxionus/laravel-translatable/run-tests?label=tests)
[![Total Downloads](https://img.shields.io/packagist/dt/taxionus/laravel-translatable.svg?style=flat-square)](https://packagist.org/packages/taxionus/laravel-translatable)

This package contains a trait to make Eloquent models translatable. Translations are stored as json. There is no extra table needed to hold them.

Once the trait is installed on the model you can do these things:

```php
$newsItem = new NewsItem; // This is an Eloquent model
$newsItem
   ->setTranslation('name', 'en', 'Name in English')
   ->setTranslation('name', 'nl', 'Naam in het Nederlands')
   ->save();

$newsItem->name; // Returns 'Name in English' given that the current app locale is 'en'
$newsItem->getTranslation('name', 'nl'); // returns 'Naam in het Nederlands'

app()->setLocale('nl');

$newsItem->name; // Returns 'Naam in het Nederlands'
```

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-translatable.jpg?t=1" width="419px" />](https://taxionus.be/github-ad-click/laravel-translatable)

We invest a lot of resources into creating [best in class open source packages](https://taxionus.be/open-source). You can support us by [buying one of our paid products](https://taxionus.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://taxionus.be/about-us). We publish all received postcards on [our virtual postcard wall](https://taxionus.be/open-source/postcards).

## Documentation

All documentation is available [on our documentation site](https://taxionus.be/docs/laravel-translatable).

## Testing

```bash
composer test
```

## Contributing

Please see [CONTRIBUTING](https://github.com/taxionus/.github/blob/main/CONTRIBUTING.md) for details.

## Security

If you've found a bug regarding security please mail [security@taxionus.be](mailto:security@taxionus.be) instead of using the issue tracker.

## Postcardware

You're free to use this package, but if it makes it to your production environment we highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using.

Our address is: Taxionus, Kruikstraat 22, 2018 Antwerp, Belgium.

We publish all received postcards [on our company website](https://taxionus.be/en/opensource/postcards).

## Credits

- [Freek Van der Herten](https://github.com/freekmurze)
- [Sebastian De Deyne](https://github.com/sebastiandedeyne)
- [All Contributors](../../contributors)

We got the idea to store translations as json in a column from [Mohamed Said](https://github.com/themsaid). Parts of the readme of [his multilingual package](https://github.com/themsaid/laravel-multilingual) were used in this readme.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
