<?php
    include('multidimensional-catalog.php');
    include 'catalog-with-keys.php';
    include 'bootstraplinks.php';
    include 'header.php';
    //include "my-functions.php";
    global $products;
    global $product;



    /* for test to PHP if not hosted */ //require('my-functions.php');
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
                                         <form method="post" action="cart.php">
                                    <div class="cart-head">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Product</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Quantity</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                <td>
                                                    <?php
                                                    foreach($products as $key => $product){
                                                        echo $product['name'] . "<br>";
                                                    }
                                                    ?>
                                                </td>
                                                    <td>
                                                        <?php
                                                        foreach($products as $key => $product){
                                                            echo formatPrice($product['price']) . "<br>";
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        foreach ($products as $key => $product){
                                                            echo ' <div class="form-group mb-0">';
                                                            echo  "<input min='0' name='".$key."' type='number'>";
                                                            echo '</div>';

                                                            //var_dump($key);

                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        //foreach ($ as $key => $quantity){
                                                           // var_dump($key);
                                                           // var_dump($quantity);
                                                            //echo totalProductPrice(intval($quantity), $product[$key]['price']);
                                                       // }
                                                       // var_dump($_GET);
                                                       // var_dump($key);
                                                        //foreach($products as $key => $product){
                                                           // if ($product['name'] === "iPhone"){
                                                           // echo totalProductPrice(intval($_GET[$key]), $product['price']);
                                                            //}
                                                           // elseif ($product['name'] === "iPad"){
                                                               // echo totalProductPrice($_GET[$key], $product['price']);
                                                           // }
                                                           // elseif ($product['name'] === "iMac"){
                                                              //  echo totalProductPrice($_GET[$key], $product['price']);
                                                           // }
                                                       // }
                                                        ?>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="cart-footer text-right">
                                        <button type="submit" class="btn btn-info my-1"><i
                                                class="ri-save-line mr-2"></i>Ajouter au panier</button>
                                    </div>
                                         </form>
<!--                                    <form method="get">-->
<!--                                        <div class="cart-head">-->
<!--                                            <div class="table-responsive">-->
<!--                                                <table class="table table-borderless">-->
<!--                                                    <thead>-->
<!--                                                    <tr>-->
<!--                                                        <th scope="col">Product</th>-->
<!--                                                        <th scope="col">Price</th>-->
<!--                                                        <th scope="col">Quantity</th>-->
<!--                                                        <th scope="col" class="text-right">Total</th>-->
<!--                                                    </tr>-->
<!--                                                    </thead>-->
<!--                                                    <tbody>-->
<!--                                                    <tr>-->
<!--                                                        <td>-->
<!--                                                            --><?php
//                                                                echo $ipad['name'] . "<br>";
//                                                            ?>
<!--                                                        </td>-->
<!--                                                        <td>-->
<!--                                                            --><?php
//                                                                echo formatPrice($ipad['price']) . "<br>";
//                                                            ?>
<!--                                                        </td>-->
<!--                                                        <td>-->
<!--                                                            --><?php
//                                                                echo ' <div class="form-group mb-0">';
//                                                                echo '<input min="0" name="quantity" value="1" type="number">';
//                                                                echo '</div>';
//                                                            ?>
<!--                                                        <td>-->
<!--                                                            --><?php
//                                                            echo totalProductPrice($_GET['quantity'], $ipad['price']);
//                                                            ?>
<!--                                                        </td>-->
<!--                                                    </tr>-->
<!--                                                    </tbody>-->
<!--                                                </table>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="cart-footer text-right">-->
<!--                                            <button type="submit" name="submit" class="btn btn-info my-1"><i-->
<!--                                                        class="ri-save-line mr-2"></i>Validation</button>-->
<!--                                        </div>-->
<!--                                    </form>-->
<!--                                    <form method="get">-->
<!--                                        <div class="cart-head">-->
<!--                                            <div class="table-responsive">-->
<!--                                                <table class="table table-borderless">-->
<!--                                                    <thead>-->
<!--                                                    <tr>-->
<!--                                                        <th scope="col">Product</th>-->
<!--                                                        <th scope="col">Price</th>-->
<!--                                                        <th scope="col">Quantity</th>-->
<!--                                                        <th scope="col" class="text-right">Total</th>-->
<!--                                                    </tr>-->
<!--                                                    </thead>-->
<!--                                                    <tbody>-->
<!--                                                    <tr>-->
<!--                                                        <td>-->
<!--                                                            --><?php
////                                                            foreach($products as $key => $product){
//                                                                echo $imac['name'] . "<br>";
//                                                            //}
//                                                            ?>
<!--                                                        </td>-->
<!--                                                        <td>-->
<!--                                                            --><?php
//                                                                echo formatPrice($imac['price']) . "<br>";
//                                                            ?>
<!--                                                        </td>-->
<!--                                                        <td>-->
<!--                                                            --><?php
//                                                                echo ' <div class="form-group mb-0">';
//                                                                echo '<input min="0" name="quantity" value="1" type="number">';
//                                                                echo '</div>';
//                                                            ?>
<!--                                                        <td>-->
<!--                                                            --><?php
//                                                            echo totalProductPrice($_GET['quantity'], $imac['price']);
//                                                            ?>
<!--                                                        </td>-->
<!--                                                    </tr>-->
<!--                                                    </tbody>-->
                                                </table>
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="cart-footer text-right">-->
<!--                                            <button type="submit" name="submit" class="btn btn-info my-1"><i-->
<!--                                                        class="ri-save-line mr-2"></i>Validation</button>-->
<!--                                        </div>-->
<!--                                    </form>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End col -->
        </div>
        <!-- End row -->
    </div>
</div>
<?php
include  'footer.php';
?>