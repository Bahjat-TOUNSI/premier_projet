<?php
    include('multidimensional-catalog.php');
    include 'catalog-with-keys.php';
    include 'bootstraplinks.php';
    include 'header.php';
    include 'database.php';
    //include "my-functions.php";
    global $products;
    global $product;
    global $db;

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
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="cart-footer text-right">
                                        <button type="submit" name="valider panier" class="btn btn-info my-1"><i
                                                class="ri-save-line mr-2"></i>Ajouter au panier</button>
                                        <?php
                                        add_order($db);
                                        ?>
                                    </div>

                                         </form>
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