<?php

/**
 *
 */
class A4 {
    /**
     * @var int
     */
    public $teszt = 1;
}

/**
 *
 */
class cloneClass {

    /**
     * @var A4
     */
    public $a4;

    /**
     *
     */
    public function __construct() {
        $this->a4 = new A4();
        $this->a4->teszt = 2;
    }
}

$normal = new cloneClass();
echo $normal->a4->teszt; //2

$clone = clone $normal;
echo $clone->a4->teszt; //2

/**
 * Ugyanaz az objektum van benne, abból nem klónozott
 */
if($normal->a4 === $clone->a4) {
    echo 'OK'; // OK
}