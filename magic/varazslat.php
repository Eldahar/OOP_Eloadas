<?php


/**
 * 
 */
class varazslat {
    /**
     * 
     */
    public function __construct() {
        echo 'konstruktor';
    }

    /**
     * @return string
     */
    public function __toString() {
        return 'ez egy string';
    }

    /**
     * @param string $name
     * @param array $arguments
     */
    public function __call($name, array $arguments) {
        echo sprintf('name: %s arg0: %s', $name, $arguments[0]);
    }

    /**
     * @param string $name
     * @return int
     */
    public function __get($name) {
        return 1;
    }

    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value) {
        echo sprintf('beallitom %s = %s', $name, $value);
    }
}

$a = new varazslat(); // konstruktor
echo $a; //ez egy string
$a->teszt(1); //name: teszt arg0: 1
echo $a->valami; //1
$a->masvalami = 2; //beallitom masvalami = 2