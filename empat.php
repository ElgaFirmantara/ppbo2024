<?php
require_once 'Author.php';
require_once 'Book.php';
require_once 'Publisher.php';

echo "--Class Author-- \n";
$hasil = new Author();
$hasil -> name = 'Elga';
$hasil -> deskripsi = 'Berkuliah di Universitas Tanjung Pura'; 
echo "-- Pemanggilan berdasarkan nama -- \n";
print_r($hasil->show('nama')); 
echo "-- Pemanggilan berdasarkan Deskripsi -- \n";
print_r($hasil->show('deskripsi')) ; 
echo "-- Pemanggilan berdasarkan All -- \n";
print_r ($hasil->show('all'));
echo "\n";

echo "--Class Book-- \n";
$buku = new Book(000, "Pemrograman Berorientasi Objek", "Sebuah buku tentang materi pemrograman ", "Pemrograman", "Bahasa Indonesia", 27, "Elga", "Tara");
echo "--Function ShowAll-- \n";
echo $buku -> showAll();
echo "--Function detail-- \n";
echo $buku -> detail(000);

echo "--Class Publisher-- \n";
$publis = new Publisher();
$publis -> name = "Fuad \n";
$publis -> address = "jl. Tabrani Ahmad\n";
$publis -> setPhone('085895675549');
echo $publis -> getphone();

?>
