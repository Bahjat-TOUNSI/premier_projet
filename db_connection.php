<?php
try
{
    $db = new PDO('mysql:host=127.0.0.1;dbname=mystore;charset=utf8', 'Bahjat', 'tounsi716607');
    //echo "Connected successfully";
}
catch (Exception $e)
{
    die('Error : ' . $e->getMessage());
}