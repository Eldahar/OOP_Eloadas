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

/**
 * Az osztályt simán származtatod, de a teszt1
 * metódust nem tudod túlterhelni, mert final az
 * ősoztályban
 */
$c = new B();
$c->teszt1();
