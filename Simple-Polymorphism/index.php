<?php
include_once "cats-and-dogs.php";

$a = new Dog('Russel');
$b = new Cat('Montesqe');

$a->makeSound();
echo '<br>';
$b->makeSound();
