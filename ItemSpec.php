<?php

class ItemSpec extends Item
{
    protected string $color;



    /**
     * @return string
     */
    public function getColor(): string
    {

       // var_dump($this->color);
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
}