<?php

class ClientList
{
    protected array $customers;

    public function __construct($db)
    {
        $customersStatement = $db->prepare('SELECT * FROM customers');

        $customersStatement->execute();
        $this->customers = $customersStatement->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @return array
     */
    public function getCustomers()
    {
        return $this->customers;
    }
}