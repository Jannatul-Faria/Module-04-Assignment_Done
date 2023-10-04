<?php
class Product {
    private int $id;
    private string $name;
    private float $price;

    public function __construct(int $id, string $name,float $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice(){
        return '$' . number_format($this->price, 2);
    }

    public function showDetails() {
        echo "Product Details:\n";
        echo "- ID: {$this->id}\n";
        echo "- Name: {$this->name}\n";
        echo "- Price: {$this->getFormattedPrice()}\n";
    }
}

// Test the Product class
$product1 = new Product(1, 'T-shirt', 19.99);
$product2 = new Product(2, 22, 25.99);
$product3 = new Product(3, 'shirt', 17.99);
$product4 = new Product(4, 'Bag', 20.99);


$product1->showDetails();
$product2->showDetails();
$product3->showDetails();
$product4->showDetails();






