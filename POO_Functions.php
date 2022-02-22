<?php

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

function displayClients(Client $client)
{
    return '<div class="card">
    <div class="card-body">
      <h1>' . $client->getFirstName() . " " . $client->getLastName() . '</h1>
<p>' . $client->getEmail() . '</p>
<p>' . $client->getDateCreated() . '</p>
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