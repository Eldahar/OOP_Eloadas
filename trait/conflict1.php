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
trait A2 {
    public function teszt1() {
        echo 'teszt3';
    }

    public function teszt2() {
        echo 'teszt4';
    }

    public function teszt3() {
        echo 'teszt5';
    }
}

/**
 *
 */
class B {
    use A, A2;
}

// COMPILE ERROR
// PHP Fatal error:  Trait method teszt1 has not been applied, because
// there are collisions with other trait methods on
// B in /home/http/eloadas/OOP/trait/conflict1.php on line 39

$c = new B();
$c->teszt1();