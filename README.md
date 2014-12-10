security
========

Simple security component for Nice applications.


Installation
------------

Install the nice/security package using [Composer](http://getcomposer.org).

From your project root directory, run:

```
composer require nice/security:1.0.x-dev
```

This command will add nice/security package to your `composer.json` and then install the necessary files.


Usage
-----

nice/security includes a default authenticator, `Nice\Security\Authenticator\SimpleAuthenticator`. This
authenticator uses the PHP 5.5 [password_*](http://php.net/password) API, falling back to ircmaxell's
[password_compat](https://github.com/ircmaxell/password_compat) library on PHP 5.4.

You must hash your password prior to using nice/security. This can be done through the included `hashpass.php`
utility.

Full source code to `hashpass.php`:

```php
<?php

require __DIR__ . '/../vendor/autoload.php';

$in = fopen('php://stdin', 'r');

echo "Enter password to hash: ";

$pass = fgets($in);

$hash = password_hash(substr($pass, 0, strlen($pass) - 1), PASSWORD_DEFAULT);

echo "Hashed result:\n";
echo $hash."\n\n";
```


This utility is automatically installed in your `vendor/bin` directory by Composer.

Run it:

```
vendor/bin/hashpass
```
