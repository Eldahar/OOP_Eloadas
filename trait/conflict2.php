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

    public function teszt4() {
        echo 'teszt6';
    }
}

/**
 *
 */
class B {
    use A, A2 {
        A::teszt1 insteadof A2;
        A2::teszt2 insteadof A;
        A::teszt2 as teszt5;
        A2::teszt4 as private tesztprivate;
    }
}

$c = new B();
$c->teszt1(); //teszt1
$c->teszt3(); //teszt5
$c->teszt5(); //teszt2
$c->tesztprivate(); //Fatal error