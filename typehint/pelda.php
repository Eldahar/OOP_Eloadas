<?php

/**
 *
 */
class A3 {

}

/**
 *
 */
interface I {

}

/**
 *
 */
class B extends A3 implements I {

}

/**
 *
 */
class C {
    /**
     * Elfogadja a B és A3 osztályokat
     *
     * @param A3 $teszt
     */
    public function teszt1(A3 $teszt) {

    }

    /**
     * Elfogadja a B osztályt
     *
     * @param B $teszt
     */
    public function teszt2(B $teszt) {

    }

    /**
     * Elfogadja a B osztályt
     *
     * @param I $teszt
     */
    public function teszt3(I $teszt) {

    }
}