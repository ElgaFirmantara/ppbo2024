<?php
namespace App\Model\Pustaka;
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