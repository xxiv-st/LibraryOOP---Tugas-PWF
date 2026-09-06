<?php
require_once 'Book.php';
require_once 'DigitalBook.php';
require_once 'Member.php';

$book1 = new Book("Three Days of Happiness", "Miaki Sugaru");
$book2 = new DigitalBook("Leadership", "Peter G. Northouse", 15);

$member1 = new Member("Ayyubi", "240143", "");
$member2 = new Member("Wibowo", "240144", "");
$member3 = new Member("Sentosa", "240145", "");

echo "--- Info Buku ---\n";
echo $book1->getInfo() . "\n\n";
echo $book2->getInfo() . "\n\n";

echo "--- Info Member ---\n";
echo $member1->getInfo() . "\n\n";
echo $member2->getInfo() . "\n\n";
echo $member3->getInfo() . "\n\n";

echo "--- Peminjaman ---\n";
$member1->pinjam($book1);
$member3->pinjam($book2);

echo $member1->infoPinjam() . "\n";
echo $member2->infoPinjam() . "\n";
echo $member3->infoPinjam() . "\n";