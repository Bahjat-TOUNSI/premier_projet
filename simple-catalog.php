<?php


$products = ["iPhone", "iPad", "iMac"];
sort($products);

foreach ($products as $key => $val) {
    echo $val . "\n";
}