<?php

function formatPrice($price){
    echo  $price / 100 ;
}

function priceExcludingVAT($noVat): string
{
    return "<h5>" . ($noVat / (100 + 20 ))  . "</h5>";
}

function displayDiscountedPrice($promo){
    echo "<h5>" . ($promo / 100) * 0.25 . "</h5>";
}

