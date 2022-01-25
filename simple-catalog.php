<?php
include 'header.php';


$products = ["iPhone", "iPad", "iMac"];

print "Tableau fournis:" . "<br>";
print_r($products);

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