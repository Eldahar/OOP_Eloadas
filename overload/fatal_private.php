<?php


/**
 *
 */
class A {
    protected function teszt1() {
        echo 'teszt1';
    }
}

/**
 *
 */
class B extends A {
    private function teszt1() {
        echo 'teszt2';
   }
}

$b = new B();
$b->teszt1(); //FATAL error
