<?php

class Category extends Item
{
    protected string $category_name;
    protected string $category_description;

    /**
     * @return string
     */
    public function getCategoryName(): string
    {
        return $this->category_name;
    }

    /**
     * @param string $category_name
     */
    public function setCategoryName(string $category_name): void
    {
        $this->category_name = $category_name;
    }

    /**
     * @return string
     */
    public function getCategoryDescription(): string
    {
        return $this->category_description;
    }

    /**
     * @param string $category_description
     */
    public function setCategoryDescription(string $category_description): void
    {
        $this->category_description = $category_description;
    }


}