# Dionysos Color Field
> This component is a part of the **Olympus Dionysos fields** for **WordPress**.  
> It uses the default WordPress color field.

[![Olympus Component][olympus-image]][olympus-url]
[![CodeFactor Grade][codefactor-image]][codefactor-url]
[![Packagist Version][packagist-image]][packagist-url]

```sh
composer require getolympus/olympus-dionysos-field-color
```

<p align="center">
    <img src="https://github.com/GetOlympus/olympus-dionysos-field-color/blob/master/assets/field-color-64.png" />
</p>

## Field initialization

Use the following lines to add a `color field` in your **WordPress** admin pages or custom post type meta fields:

```php
return \GetOlympus\Dionysos\Field\Color::build('my_color_field_id', [
    'title'       => 'What is your favorite Coke?',
    'default'     => '#f40000',
    'description' => 'Zero and Light are not available colors!',

    /**
     * Color picker settings
     * @see https://core.trac.wordpress.org/browser/trunk/src/js/_enqueues/lib/color-picker.js
     */
    'settings' => [
        'defaultColor' => false,
        'hide'         => true,
        'palettes'     => true,
        'width'        => 255,
        'mode'         => 'hsv',
        'type'         => 'full',
        'slider'       => 'horizontal',
    ],
]);
```

## Variables definitions

| Variable      | Type    | Default value if not set | Accepted values |
| ------------- | ------- | ------------------------ | --------------- |
| `title`       | String  | `'Color'` | *empty* |
| `default`     | String  | *empty* | Hex color code |
| `description` | String  | *empty* | *empty* |
| `settings`    | Array   | see [Field initialization](#field-initialization) | see [WordPress reference](https://core.trac.wordpress.org/browser/trunk/src/js/_enqueues/lib/color-picker.js) |

## Retrive data

Retrieve your value from Database with a simple `get_option('my_color_field_id', '')` (see [WordPress reference][getoption-url]).

```php
// Get color from Database
$color = get_option('my_color_field_id', '#f40000');

// Display Coca-Cola baseline in color
echo 'Always <b style="color:'.$color.'">Coca-Cola</b>';
```

## Release History

0.0.12
- New Olympus components compatibility
- Change repository to be a part of Dionysos fields

0.0.11
- FIX: json encoder in twig source file

0.0.10
- FIX: remove twig dependency from composer

## Authors and Copyright

Achraf Chouk  
[![@crewstyle][twitter-image]][twitter-url]

Please, read [LICENSE][license-blob] for more information.  
[![MIT][license-image]][license-url]

<https://github.com/crewstyle>  
<https://fr.linkedin.com/in/achrafchouk>

## Contributing

1. Fork it (<https://github.com/GetOlympus/olympus-dionysos-field-color/fork>)
2. Create your feature branch (`git checkout -b feature/fooBar`)
3. Commit your changes (`git commit -am 'Add some fooBar'`)
4. Push to the branch (`git push origin feature/fooBar`)
5. Create a new Pull Request

---

**Built with ♥ by [Achraf Chouk](https://github.com/crewstyle "Achraf Chouk") ~ (c) since a long time.**

<!-- links & imgs dfn's -->
[olympus-image]: https://img.shields.io/badge/for-Olympus-44cc11.svg?style=flat-square
[olympus-url]: https://github.com/GetOlympus
[codefactor-image]: https://www.codefactor.io/repository/github/GetOlympus/olympus-dionysos-field-color/badge?style=flat-square
[codefactor-url]: https://www.codefactor.io/repository/github/getolympus/olympus-dionysos-field-color
[getoption-url]: https://developer.wordpress.org/reference/functions/get_option/
[license-blob]: https://github.com/GetOlympus/olympus-dionysos-field-color/blob/master/LICENSE
[license-image]: https://img.shields.io/badge/license-MIT_License-blue.svg?style=flat-square
[license-url]: http://opensource.org/licenses/MIT
[packagist-image]: https://img.shields.io/packagist/v/getolympus/olympus-dionysos-field-color.svg?style=flat-square
[packagist-url]: https://packagist.org/packages/getolympus/olympus-dionysos-field-color
[twitter-image]: https://img.shields.io/badge/crewstyle-blue.svg?style=social&logo=twitter
[twitter-url]: https://twitter.com/crewstyle