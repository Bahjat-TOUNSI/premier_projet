<?php
include "db_connection.php";


function display_table($db){
$list = $db->prepare('SELECT * FROM products');
$list -> execute();
$products = $list -> fetchall();
return $products;
}

function quantity_0($db){
    $list = $db->prepare('SELECT name FROM products WHERE quantity = 0');
    $list -> execute();
    $products_quantity = $list -> fetchall();
    return $products_quantity;
}

function order_name_price($db){
    $list = $db->prepare('SELECT first_name, SUM(order_product.quantity * products.price) AS total_order
FROM order_product 
JOIN products
ON products.id = product_id
JOIN orders 
ON order_id = orders.id
JOIN customers
ON customers.id = customer_id
WHERE customers.first_name = "Charlize"
GROUP BY orders.number');
    $list -> execute();
    $order_name_price = $list -> fetchall();
    return $order_name_price;
}

function order_price($db){
    $list = $db->prepare('SELECT orders.number, SUM(order_product.quantity * products.price) AS total_order
FROM order_product 
INNER JOIN products
ON product_id = products.id
INNER JOIN orders 
ON order_id = orders.id 
GROUP BY number');
    $list -> execute();
    $order_price = $list -> fetchall();
    return $order_price;
}