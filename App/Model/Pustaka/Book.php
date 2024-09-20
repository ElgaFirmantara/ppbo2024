<?php
namespace App\Model\Pustaka;
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