<?php

require_once "vendor/autoload.php";

use Rivsen\Demo\hello;

$hello = new Hello();
echo $hello->hello();

echo "\n";
$hiGirl = new Hello('My Goddess');
echo $hiGirl->hello();