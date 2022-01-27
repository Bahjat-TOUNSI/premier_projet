<?php

function formatPrice($price){
    echo "<h5>" . $price / 100 . "</h5>";
}

function priceExcludingVAT($noVat){
    echo "<h5>" . ($noVat / (100 + 20 ))  . "</h5>";
}