<?php

namespace Teszt;

use Teszt\Elso\Class2;
use Teszt\Masodik\Class2 as Teszt4;

/**
 *
 */
class Class1 {
    /**
     * @return Class2
     */
    public function teszt1() {
        return new Class2();
    }

    /**
     * @return Masodik\Class3
     */
    public function teszt2() {
        return new \Teszt\Masodik\Class3();
    }

    /**
     * @return Masodik\Class3
     */
    public function teszt3() {
        return new Masodik\Class3();
    }

    /**
     * @return Teszt4
     */
    public function teszt4() {
        return new Teszt4();
    }
}