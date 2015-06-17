<?php


/**
 *
 */
class A {
    public function teszt1() {
        echo 'teszt1';
    }
}

/**
 *
 */
class B extends A {
    public function teszt1() {
        echo 'teszt2';
   }
}

$b = new B();
$b->teszt1(); //teszt2
