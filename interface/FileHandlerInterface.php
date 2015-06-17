<?php

namespace pelda2;

/**
 * A filehandler nyilvános felülete
 */
interface FileHandlerInterface {
    /**
     * Megnyitja a file -t
     *
     * @param int $mode
     * @param string $filename
     * @throws \Exception
     */
    public function openFile($mode, $filename);

    /**
     * Lezárja a file -t
     */
    public function closeFile();
}