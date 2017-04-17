<?php

require_once "../Model.php";

$person = new Model();

$person->name = 'John';

$person->age = 26;

echo $person->name . PHP_EOL;
echo $person->age . PHP_EOL;