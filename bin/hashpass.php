<?php

(@include_once __DIR__ . '/../vendor/autoload.php') || @include_once __DIR__ . '/../../../autoload.php';

$in = fopen('php://stdin', 'r');

echo "Enter password to hash: ";

$pass = fgets($in);
// trim newline
$pass = substr($pass, 0, strlen($pass) - 1);

$hash = password_hash($pass, PASSWORD_DEFAULT);

echo "Hashed result:\n";
echo $hash."\n\n";
