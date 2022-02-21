<?php
include "db_connection.php";


function display_products($db){
    $list = $db->prepare('SELECT * FROM products');
    $list->execute();
    $products = $list->fetchall(PDO::FETCH_ASSOC);
    return $products;
}

function quantity($db){
    $list = $db->prepare('SELECT name FROM products WHERE quantity = 0');
    $list->execute();
    $products_quantity = $list->fetchall(PDO::FETCH_ASSOC);
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
    $list->execute();
    $order_name_price = $list -> fetchall(PDO::FETCH_ASSOC);
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
    $list->execute();
    $order_price = $list -> fetchall(PDO::FETCH_ASSOC);
    return $order_price;
}

function insert_new_customer($db){
    $db->query("INSERT INTO customers (first_name, last_name, email) VALUES ('bahjat', 'tounsi', 'bahjat@gmail.com')");
}

function change_product_quantity($db){
    $db->query("UPDATE products SET quantity = 5 WHERE id = 1");
}

function add_order($db){
    $db->query("INSERT INTO orders (customer_id, number, description) VALUES ('2','569855','added from panier')");
}