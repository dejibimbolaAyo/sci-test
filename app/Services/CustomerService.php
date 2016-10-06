<?php

namespace App\Services;

use App\Models\Customer as CustomerModel;

class CustomerService
{
    /**
     * Creates customer
     *
     * @param array $customerData
     *
     * @return CustomerModel
     */
    public function create(array $customerData): CustomerModel
    {
        return CustomerModel::create($customerData);
    }
}