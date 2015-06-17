<?php


/**
 * Abstract adatkezelő
 */
abstract class AbstractDataHandler {
    /**
     * @var string
     */
    protected $filename = 'test.txt';

    /**
     * @var array
     */
    protected $data;

    /**
     * @return array
     */
    public function getData() {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(array $data) {
        $this->data = $data;
    }

    public function sortData() {
        sort($this->data);
    }

    public function save() {
        foreach($this->data as $dataLine) {
            $this->writeLine($dataLine);
        }
    }

    public function load() {
        $this->data = $this->loadFrom();
    }

    /**
     * Írási művelet
     *
     * @param string $line
     */
    abstract protected function writeLine($line);

    /**
     * Olvasás fileból
     *
     * @return array
     */
    abstract protected function loadFrom();
}