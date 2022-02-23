<?php

class Color
{
    protected array $product_color;

    public function __construct($db)
    {
        $product_colorStatement = $db->prepare('SELECT * FROM color');

        $product_colorStatement->execute();
        $this->product_color = $product_colorStatement->fetchAll(PDO::FETCH_ASSOC);
    }


    /**
     * @return array
     */
    public function getProductColor()
    {
        return $this->product_color;
    }
}