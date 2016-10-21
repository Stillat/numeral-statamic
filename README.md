# Numeral for Statamic

Numeral for Statamic is a modifier addon that makes it easy to format numbers in your Statamic sites. It allows you to supply a simple-to-understand format to your numbers.

As an example, assuming the following data:

```
favorite_number: 2300000000
```

And this template:

```html
<h1>The favorite number is: {{ favorite_number | numeral:0,0.00 }}</h1>
```

The user would see this on the page:

```
The favorite number is: 2,300,000,000.00
```

Pretty cool. But we can do better. Imagine that the favorite number was really the size of a file (like, a really big file), we could even format that! Imagine the following example:

```html
<h1>The file size is: {{ favorite_number | numeral:0,0.00 b</h1>
```

Notice the `b` that was included in the format? The user would now see this on the page:

```
The file size is: 2.14 GiB
```

There's a lot more that can be done with formats; since Numeral for Statamic is based on https://github.com/Stillat/numeral.php, head over there to learn all about the different formats that are available (do note that verbatim formats won't work in Antlers).

## Installation

Copy the `Numeral` directory into your site's `addons` directory. Simple.

Since this addon requires some additional dependencies, don't forget to issue the `php please addons:refresh` command!

## Configuration

The formatter uses the `en-US` locale by default. There are many languages supported by Numeral (https://github.com/Stillat/numeral.php/tree/master/src/Languages). To change the locale that is being used, create a `numeral.yaml` file in your site's `settings/addons/` directory. Inside this `numeral.yaml` file, add the following:

```yaml
locale: en-US
```

Be sure to change the `en-US` value to any valid locale code that Numeral supports.

## License

Numeral for Statamic is open-sourced software licensed under the MIT license.