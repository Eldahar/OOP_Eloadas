<?php


/**
 *
 */
class A {
    final public function teszt1() {
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

$c = new B(); // FATAL error
$c->teszt1();
