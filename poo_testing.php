<?php
include 'bootstraplinks.php';
include 'db_connection.php';
GLOBAL $db;
include 'Item.php';
include 'POO_Functions.php';
include 'Catalogue.php';



$item = new Item();
$item->setName('Iphone');
$name = $item->getName();
?>

<!--<h1> --><?//= $name ?><!-- </h1>-->


<?php

$catalog = new Catalogue($db);
echo displayCatalog($catalog);



