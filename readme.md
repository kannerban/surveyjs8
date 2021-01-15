# Laravel 6.* SurveyJs package

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

Laravel Survey Manager system based on surveyjs library. Take a look at [contributing.md](contributing.md) to see a to do list.
<br>
<img src="https://i.imgur.com/o9RAHmp.gif" />
<br>
## Installation

1) In your terminal:

``` bash
$ composer require composer require fruitware/laravel-surveyjs
```

2) Publish the config file & run the migrations 

```bash
php artisan vendor:publish --provider="Fruitware\LaravelSurveyJS\LaravelSurveyJsServiceProvider"
php artisan migrate
```

3) Create a new survey on your-project-domain/admin/survey

4) [optional] Change values in config/survey-manager.php (route prefix, middleware, builder theme etc.)

## Usage
TODO

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.
``

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email makataev.7@gmail.com instead of using the issue tracker.

## Credits

- [Fruitware][link-author]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/fruitware/laravel-surveyjs.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/fruitware/laravel-surveyjs.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/fruitware/laravel-surveyjs/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/fruitware/laravel-surveyjs
[link-downloads]: https://packagist.org/packages/fruitware/laravel-surveyjs
[link-travis]: https://travis-ci.org/fruitware/laravel-surveyjs
[link-styleci]: https://styleci.io/repos/134269033
[link-author]: https://github.com/Fruitware
