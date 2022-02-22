<?php

function displayProducts(Item $item)
{
    return '<div class="card">
    <div class="card-body">
      <h1>' . "Product name: " . $item->getName() . '</h1>
<p>' . "Product description: " . $item->getDescription() . '</p>
<p>' . "Product price: " . $item->getPrice() . '</p>
<p>' . "Product image: " . $item->getImageUrl() . '</p>
<p>' . "Product weight: " . $item->getWeight() . '</p>
<p>' . "Product stock quantity: " . $item->getStock() . '</p>
<p>' . "Product available: " . $item->isAvailable() . '</p>
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

function displayClients(Client $client)
{
    return '<div class="card">
    <div class="card-body">
      <h1>' . "Name: " . $client->getFirstName() . " " . $client->getLastName() . '</h1>
<p>' . "Email: " . $client->getEmail() . '</p>
<p>' . "Account created on: " . $client->getDateCreated() . '</p>
</div>
</div>';
}

function displayClient(ClientList $client)
{
    $html = '';

    foreach ($client->getCustomers() as $customer) {
        $item = new Client();
        $item->setFirstName($customer['first_name']);
        $item->setLastName($customer['last_name']);
        $item->setEmail($customer['email']);
        $item->setDateCreated($customer['account_created']);

        $html .= displayClients($item);
    }

    return $html;
}