<?php
//echo "Quantity ordered: " . $_GET['quantity'];
include 'multidimensional-catalog.php';
//include 'catalog-with-keys.php';
include 'bootstraplinks.php';
include 'header.php';
global $products;
global $product;
global $totalTTC;
global $totalHt;

//var_dump($_POST);

foreach ($_POST as $key => $value){
    if($value === "" || $value === "0"){
        unset($_POST[$key]);
    }
}
//var_dump($_POST);
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
                                        <div class="cart-head">
                                            <div class="table-responsive">
                                                <table class="table table-borderless">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Product</th>
<!--                                                        <th scope="col">Price</th>-->
                                                        <th scope="col">Quantity</th>
                                                        <th scope="col">Total</th>
                                                        <th scope="col">Total HT</th>
<!--                                                        <th scope="col">TVA</th>-->

                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php
                                                    if (isset($_POST) && !empty($_POST)){


                                                    ?>


                                                    <tr>
                                                        <td>
                                                            <?php
                                                            foreach ($_POST as $key =>$product)
                                                                if ($product >= 1){
                                                                    echo $key . "<br><hr>";
                                                            }
                                                            ?>
                                                        </td>
<!--                                                        <td>-->

<!--                                                        </td>-->

                                                        <td>
                                                            <?php
                                                            foreach ($_POST as $key => $quantity){
                                                                if ($quantity >= 1){
                                                                    echo $quantity .  "<br><hr>";
                                                                }
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            foreach ($_POST as $key_post => $quantity){
                                                                if ($quantity >= 1) {
                                                                    foreach ($products as $key_product => $product) {
                                                                        if($key_post === $key_product){
                                                                            $productTotal = totalProductPrice($product['price'], $quantity);
                                                                            $totalTTC += $productTotal;
                                                                            echo $productTotal . " €" . "<br><hr>";
                                                                        }
                                                                    }

                                                                }
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            foreach ($_POST as $key_post => $quantity){
                                                                if ($quantity >= 1) {
                                                                    foreach ($products as $key_product => $product) {
                                                                        if($key_post === $key_product){
                                                                            $productHtTotal = priceExcludingVAT($product['price'], $quantity);
                                                                            $totalHt += $productHtTotal;
                                                                            echo $productHtTotal . "€" . "<br><hr>";
                                                                        }
                                                                    }
                                                                }
                                                            }

                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    }else{
                                                        ?>
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                            </symbol>
                                                        </svg>
                                                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                                                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                                            <div>
                                                                Erreur ! Aucun produit sélectionner.
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                    <tr>
                                                    <td><strong>Total commande TTC :</strong>
                                                            <?php
                                                            if($totalTTC ==!0){
                                                            echo $totalTTC . " €";
                                                            }
                                                            ?>
                                                        </td>
                                                        <td><strong>Total commande HT :</strong>
                                                            <?php
                                                            if($totalHt ==!0){
                                                                echo $totalHt . " €";
                                                            }
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
                                    </div>
