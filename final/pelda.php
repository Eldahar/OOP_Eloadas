<?php


/**
 *
 */
final class A {

}

/**
 *
 */
class B extends A {

}

/**
 * Nem tudod származtatni, mert az A osztály final!
 * Fordításidejű hiba!
 */
$c = new B();
