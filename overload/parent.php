<?php


/**
 *
 */
class A {
    protected function teszt1() {
        echo 'teszt1';
    }

    protected function teszt2() {
        echo 'teszt3';
    }
}

/**
 *
 */
class B extends A {
    public function teszt1() {
        parent::teszt1();
        $this->teszt2();
   }
}

$b = new B();
$b->teszt1(); //teszt1 és teszt3
