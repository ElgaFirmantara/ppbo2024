<?php
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