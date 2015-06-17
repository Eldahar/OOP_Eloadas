<?php

namespace closure;

/**
 *
 */
class ClosureTest {
    public function teszt() {
        $closure1 = function($a) {
            echo $a."\n";
        };

        $closure1(1); //1

        $b = 1;
        $closure2 = function() use($b) {
            echo $b."\n";
        };

        $closure2(); //1
        $b = 2;
        $closure2(); //1

        $b = 1;
        $closure3 = function() use(&$b) {
            echo $b."\n";
        };

        $closure3(); //1
        $b = 2;
        $closure3(); //2
    }
}

$a = new ClosureTest();
$a->teszt();