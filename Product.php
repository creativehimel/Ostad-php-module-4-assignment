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
        echo "Product Details: <br>";
        echo "-ID: $this->id <br>";
        echo "-Name: $this->name <br>";
        echo "-Price: $" . $this->getFormattedPrice() . "<br>";
    }
}

$product = new Product(1, "T-Shirt", 19.99);
$product->showDetails();
