<?php

class CategoryList
{
    protected array $categories;

    public function __construct($db)
    {
        $categoriesStatement = $db->prepare('SELECT * FROM categories');

        $categoriesStatement->execute();
        $this->categories = $categoriesStatement->fetchAll(PDO::FETCH_ASSOC);
    }



    /**
     * @return array
     */
    public function getCategories()
    {

        return $this->categories;
    }
}