<?php


/**
 *
 */
trait A {
    public function teszt1() {
        echo 'teszt1';
    }

    public function teszt2() {
        echo 'teszt2';
    }
}

/**
 *
 */
class B {
    use A;
}

$c = new B();
$c->teszt1(); // teszt1