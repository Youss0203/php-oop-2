<?php
require_once __DIR__  . '/Product.php';
class Toy extends Product{
    public $material;
    public function __construct(string $_name, string $_description, float $_price,  string $_imageUrl, bool $_isInStock, int $_quantity, Category $_category, string $_material){
        parent::__construct($_name, $_description, $_price, $_imageUrl, $_isInStock, $_quantity, $_category);
        $this->material = $_material;
    }

    public function getAdditionalInfo(){
        return 'Made of: '. $this->material;
    }
} 