<?php

include 'header.php';
include 'my-functions.php';

$iphone = [
    "name" => "iPhone",
    "price" => 45000,
    "weight" => 200,
    "discount" => 0,
    "picture_url" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-13-pro-family-hero?wid=940&hei=1112&fmt=png-alpha&.v=1631220221000",
];

$ipad = [
    "name" => "iPad",
    "price" => 45000,
    "weight" => 200,
    "discount" => 0,
    "picture_url" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/ipad-202109-gallery-1?wid=2822&hei=2400&fmt=jpeg&qlt=80&.v=1629916218000",
];

$imac = [
    "name" => "iMac",
    "price" => 45000,
    "weight" => 200,
    "discount" => 0,
    "picture_url" => "https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/imac-24-blue-selection-hero-202104?wid=904&hei=840&fmt=jpeg&qlt=80&.v=1617492405000",
];
echo '<pre>';
print_r($imac);
print "<br><br>";
print_r($ipad);
print "<br><br>";
print_r($iphone);

include 'footer.php';