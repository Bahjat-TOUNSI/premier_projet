<?php

function formatPrice($price){
    echo  $price / 100 . " €" ;
}

function priceExcludingVAT($noVat, $quantity): float|int
{
    return number_format((($noVat / (100 + 20 )) * $quantity), 2,".","") ;
}


function displayDiscountedPrice($promo){
    echo "<h5>" . ($promo / 100) * 0.25 . "</h5>";
}

function totalProductPrice($quantity, $price): float|int
{
    return ($quantity * $price) / 100;
}