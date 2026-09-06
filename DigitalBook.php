<?php
require_once 'Book.php';

class DigitalBook extends Book {
    public $fileSize;

    public function __construct($title, $author, $fileSize) {
        parent::__construct($title, $author);
        $this->fileSize = $fileSize;
    }

    public function getInfo() {
        return parent::getInfo() . "\nUkuran : " . $this->fileSize . " MB";
    }
}