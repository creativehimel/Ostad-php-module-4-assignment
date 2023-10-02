<?php

class Product
{
    protected int $id;
    protected string $name;
    protected float $price;

    public function __construct(int $id, string $name, float $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice()
    {
        return (string)round($this->price, 2);
    }

    public function showDetails()
    {
        echo "============== Product Deatils ============== <br>";
        echo "Product ID: $this->id <br>";
        echo "Product Name: $this->name <br>";
        echo "Product Price: $" . $this->getFormattedPrice() . "<br>";
    }
}

$product = new Product(1, "T-Shirt", 25.462);
$product->showDetails();
