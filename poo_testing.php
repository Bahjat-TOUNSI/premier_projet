<?php
include 'bootstraplinks.php';
include 'db_connection.php';
GLOBAL $db;
include 'Item.php';
include 'POO_Functions.php';
include 'Catalogue.php';
include 'ClientList.php';
include 'Client.php';
include 'CategoryList.php';
include 'Category.php';



$catalog = new Catalogue($db);
echo displayCatalog($catalog);

//$client = new ClientList($db);
//echo displayClient($client);