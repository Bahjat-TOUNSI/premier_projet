<?php
include 'header.php';


$products = ["iPhone", "iPad", "iMac"];

echo '<pre>';
print "Tableau fournis:" . "<br>";
foreach($products as $value){
    print $value."\n";
}



print "<br><br>";

sort($products);

print "Tableau par ordre alphabetic:" . "<br>";
print_r($products);

print "<br><br>";

print "Le premier élément du tableau:" . "<br>";
print_r($products[0]);

print "<br><br>";

print "Le dernier élément du tableau:" . "<br>";
print_r(end($products));

include 'footer.php';