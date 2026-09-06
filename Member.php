<?php
class Member {
    public $name;
    public $npm;
    public $pinjamBook;

    public function __construct($name, $npm, $pinjamBook) {
        $this->name = $name;
        $this->npm = $npm;
        $this->pinjamBook = null;
    }

    public function getInfo() {
        echo "Nama : ". $this->name . "\nNPM : ". $this->npm;
    }

    public function pinjam($book) {
        $this->pinjamBook = $book;
    }

    public function infoPinjam() {
        if ($this->pinjamBook != null) {
        echo $this->name. " meminjam buku : ". $this->pinjamBook->title;
        } else {
            echo $this->name. " tidak meminjam buku";
        }
    }
}
?>