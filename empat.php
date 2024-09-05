<?php

class Author {
    public $name;
    public $deskripsi;
    public function show($type) {
        if ($type === 'nama') {
           return ['Nama: ' . $this->name];
        } elseif ($type === 'deskripsi') {
            return [ 'Deskripsi: ' . $this->deskripsi];
        } elseif ($type === 'all') {
            return [ 'Nama: ' . $this->name . "\nDeskripsi: " . $this->deskripsi];
        }

        return [];
    }
}

class Book {
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function __construct($ISBN, $title, $description, $category, $language, $numberOfPage, $author, $publisher) {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher = $publisher;
    }

    public function showAll() {
        $result = "ISBN: " . $this->ISBN . "\n";
        $result .= "Title: " . $this->title . "\n";
        $result .= "Description: " . $this->description . "\n";
        $result .= "Category: " . $this->category . "\n";
        $result .= "Language: " . $this->language . "\n";
        $result .= "Number of Pages: " . $this->numberOfPage . "\n";
        $result .= "Author: " . $this->author ."\n";
        $result .= "Publisher: " . $this->publisher . "\n";

        return $result;
    }

    public function detail($ISBN) {
        if ($this->ISBN == $ISBN) {
            return $this->showAll();
        } else {
            return "Book not found";
        }
    }
}
class Publisher {
    public $name;
    public $address;
    private $phone;

    public function setPhone($phone) {
        $this->phone = $phone;
        }

    public function getPhone() {
        return $this->phone;
        }
}


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
