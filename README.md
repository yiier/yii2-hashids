Yii2 for [hashids](https://github.com/vinkla/hashids)
------------------------------

[![Build Status](https://img.shields.io/travis/yiier/yii2-hashids.svg?style=flat-square)](http://travis-ci.org/yiier/yii2-hashids)
[![version](https://img.shields.io/packagist/v/yiier/yii2-hashids.svg?style=flat-square)](https://packagist.org/packages/yiier/yii2-hashids)
[![Download](https://img.shields.io/packagist/dt/yiier/yii2-hashids.svg?style=flat-square)](https://packagist.org/packages/yiier/yii2-hashids)
[![Issues](https://img.shields.io/github/issues/yiier/yii2-hashids.svg?style=flat-square)](https://github.com/yiier/yii2-hashids/issues)

## Installation

Install this package via [Composer](https://getcomposer.org/):

```
$ composer require yiier/yii2-hashids
```

## Usage

### configurate is as a component

In your `main.php` or `web.php` (dependences your yii2 project constructor):

```php
[
	'hahsids' => [
		'class' => 'yiier\hashids\Hashids',
		//'salt' => 'your salt',
		//'minHashLength' => 5,
		//'alphabet' => 'abcdefghigk'
	]
]
```

Also using this like this:

```php
$hashids = Yii::createObject([
	'class' => 'yiier\hashids\Hashids'
]);

$id = $hashids->encode(1, 2, 3);
$numbers = $hashids->decode($id);
var_dump($id, $numbers);
```

## Test

```
$ phpunit
```

## Lisence

![MIT](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)

