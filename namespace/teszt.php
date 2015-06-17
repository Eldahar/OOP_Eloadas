<?php

use Teszt\Class1;

/**
 * @param string $class
 */
function __autoload($class) {
    $parts = explode('\\', $class);
    if($parts[0] == 'Teszt') {
        unset ($parts[0]);
    }
    $newClass = implode('/', $parts).'.php';
    include $newClass;
}

$a = new Class1();
echo get_class($a->teszt1())."\n"; //Teszt\Elso\Class2
echo get_class($a->teszt2())."\n"; //Teszt\Masodik\Class3
echo get_class($a->teszt3())."\n"; //Teszt\Masodik\Class3
echo get_class($a->teszt4())."\n"; //Teszt\Masodik\Class2
