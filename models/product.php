<?php
class Product{
    public $name;
    public $description;
    public $price;
    public $imageUrl;
    public $isInStock;
    public $quantity;
    public $category;
    public function __construct(string $_name, string $_description, float $_price, string $_imageUrl, bool $_isInStock, int $_quantity, Category $_category ){
        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;
        $this->imageUrl = $_imageUrl;
        $this->isInStock = $_isInStock;
        $this->quantity = $_quantity;
        $this->category = $_category;
    }
    public function getProductInfo(): string{
        return $this->name . ', ' . $this->description . ', ' . $this->imageUrl . ' ' . $this->isInStock . ' ' . $this->quantity . ' ' . $this->category->name;
    }

}
