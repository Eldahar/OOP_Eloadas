<?php

namespace pelda2;

/**
 * File olvasására
 */
interface FileReaderInterface {
    /**
     * Egy sort olvas
     *
     * @return string
     */
    public function getLine();
}