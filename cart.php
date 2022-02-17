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
                                                        <div class="alert alert-danger" role="alert">
                                                            <h4 class="alert-heading">Erreur !</h4>
                                                            <p>Aucun article choisis.</p>
                                                            <hr>
                                                            <p class="mb-0">Merci de préciser les quantités.</p>
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
