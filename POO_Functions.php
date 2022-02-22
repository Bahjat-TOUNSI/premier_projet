<?php


//function display_Item(Item $item){
//
//    return '<h1>' . $item->name . '</h1>';

//    echo $item;
//    var_dump($item);
//}

function displayProducts(Item $item)
{
    return '<div class="card">
    <div class="card-body">
      <h1>' . $item->getName() . '</h1>
<p>' . $item->getDescription() . '</p>
<p>' . $item->getPrice() . '</p>
<p>' . $item->getImageUrl() . '</p>
<p>' . $item->getWeight() . '</p>
<p>' . $item->getStock() . '</p>
<p>' . $item->isAvailable() . '</p>
</div>
</div>';
}

function displayCatalog(Catalogue $catalog)
{
    $html = '';

    foreach ($catalog->getProducts() as $product) {
        $item = new Item();
        $item->setName($product['name']);
        $item->setDescription($product['description']);
        $item->setPrice($product['price']);
        $item->setImageUrl($product['image']);
        $item->setWeight($product['weight']);
        $item->setStock($product['stock']);
        $item->setAvailable($product['available']);

        $html .= displayProducts($item);
    }

    return $html;
}

