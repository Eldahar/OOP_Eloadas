<?php

namespace pelda2;

/**
 * Fileokat kezelő osztály
 */
class FileHandler implements FileHandlerInterface, FileReaderInterface {
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
     * {@inheritdoc}
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
     * @throws \InvalidArgumentException
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
     * {@inheritdoc}
     */
    public function closeFile() {
        fclose($this->handler);
    }

    /**
     * {@inheritdoc}
     */
    public function getLine() {
        return fgets($this->handler);
    }
}