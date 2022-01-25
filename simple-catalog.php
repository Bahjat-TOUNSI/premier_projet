<?php
include 'header.php';

$products = ["iPhone", "iPad", "iMac"];
sort($products);



foreach ($products as $val) {
    echo $val . "\n" . "<br><br>";
}






include 'footer.php';