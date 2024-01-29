<?php
require_once __DIR__  . '/Product.php';
class Kennel extends Product{
    public $size;
    public function __construct(string $_name, string $_description, float $_price, string $_imageUrl, bool $_isInStock, int $_quantity, Category $_category, string $_size){
        parent::__construct($_name, $_description, $_price, $_imageUrl, $_isInStock, $_quantity, $_category);
        $this->size = $_size;
    }


    public function getAdditionalInfo(){
        return 'Kennel size: '. $this->size;
    }
}