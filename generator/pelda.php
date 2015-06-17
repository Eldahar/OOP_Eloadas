<?php

/**
 *
 */
class tesztGenerator {
    /**
     * @return Generator
     */
    public function szamGenerator() {
        for($n = 0; $n < 10 ; $n++) {
            yield $n;
        }
    }

    /**
     * @return Generator
     */
    public function arrayGenerator() {
        for($n = 0; $n < 10 ; $n++) {
            yield $n => $n+1;
        }
    }

    public function teszt() {
        foreach($this->szamGenerator() as $n) {
            echo $n."\n";
        }
    }

    public function teszt2() {
        foreach($this->arrayGenerator() as $key => $n) {
            echo sprintf("%s => %s\n", $key, $n);
        }
    }
}

$a = new tesztGenerator();
$a->teszt();
$a->teszt2();
