<?php

class Catalogue
{
    protected array $products;

    public function __construct($db)
    {
        $productsStatement = $db->prepare('SELECT *, color.color
                                            FROM products
                                            RIGHT OUTER JOIN color
                                            on color.id = color_id
                                            GROUP BY color.color');

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

