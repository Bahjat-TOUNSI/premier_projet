<?php

class Catalogue
{
    protected array $products;

    public function __construct($db)
    {
        $productsStatement = $db->prepare('SELECT * FROM products');

        $productsStatement->execute();
        $this->products = $productsStatement->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }
}

