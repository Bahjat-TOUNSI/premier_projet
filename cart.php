<?php
//echo "Quantity ordered: " . $_GET['quantity'];
include 'multidimensional-catalog.php';
//include 'catalog-with-keys.php';
include 'bootstraplinks.php';
include 'header.php';
global $products;
global $product;

//print_r($_POST);
?>

<div class="container mt-2 mb-5">
    <div class="contentbar">
        <!-- Start row -->
        <div class="row">
            <!-- Start col -->
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title">Cart</h5>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-xl-8">
                                <div class="cart-container">
                                    <form method="get" action="cart.php">
                                        <div class="cart-head">
                                            <div class="table-responsive">
                                                <table class="table table-borderless">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Product</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Quantity</th>
                                                        <th scope="col" class="text-right">Total</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                            //echo $product_bought['name'] . "<br>";
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php

                                                            ?>
                                                        </td>

                                                        <td>
                                                            <?php
                                                            foreach ($_POST as $key => $quantity){
                                                                if ($quantity >= 1){
                                                                    echo $quantity . "<br>";
                                                                }
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            foreach ($_POST as $key_post => $quantity){
                                                               //echo "key : " . $key_post . "<br>";
                                                                //echo "quantity : " . $quantity . "<br><br>";
                                                                if ($quantity >= 1) {
                                                                    foreach ($products as $key_product => $product) {
                                                                        //echo $key_product;
                                                                        if($key_post === $key_product){
                                                                            echo totalProductPrice($product['price'], $quantity) . "<br>";
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                            //var_dump($products);
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
<!--                                        <div class="cart-footer text-right">-->
<!--                                            <button type="submit" name="submit_iphone" class="btn btn-info my-1"><i-->
<!--                                                    class="ri-save-line mr-2"></i>Validation</button>-->
<!--                                        </div>-->
                                    </form>
