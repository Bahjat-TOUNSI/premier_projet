<?php
include 'bootstraplinks.php';
include 'db_connection.php';
GLOBAL $db;
include 'Item.php';
include 'POO_Functions.php';
include 'Catalogue.php';
include 'ClientList.php';
include 'Client.php';



//$catalog = new Catalogue($db);
//echo displayCatalog($catalog);

$client = new ClientList($db);
echo displayClient($client);



