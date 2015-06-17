<?php

namespace pelda1;

/**
 * Fileokat kezelő osztály
 */
class FileHandler {
    /**
     * Az olvasás típusa
     */
    const READ=1;

    /**
     * az írás típusa
     */
    const WRITE=2;

    /**
     * A file leírója
     *
     * @var resource
     */
    protected $handler;

    /**
     * Megnyitja a file -t
     *
     * @param int $mode
     * @param string $filename
     * @throws \Exception
     */
    public function openFile($mode, $filename) {
        if(!file_exists($filename)) {
            throw new \Exception(sprintf('Nincs meg a file: %s', $filename));
        }
        $this->handler = fopen($filename, $this->convertMode($mode));
    }

    /**
     * A saját formátumról fopen formátumra
     * konvertálja a mode -ot
     *
     * @param int $mode
     * @return string
     */
    protected function convertMode($mode) {
        if($mode === self::READ) {
            return 'r';
        } elseif($mode === self::WRITE) {
            return 'w';
        } else {
            throw new \InvalidArgumentException('Ez milyen mód: %s', $mode);
        }
    }

    /**
     * Lezárja a file -t
     */
    public function closeFile() {
        fclose($this->handler);
    }

    /**
     * Egy sort olvas
     *
     * @return string
     */
    public function getLine() {
        return fgets($this->handler);
    }
}