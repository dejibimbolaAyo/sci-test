<?php

namespace App\Http\Controllers;

use App\Http\Requests\Customer\Create as CreateCustomerRequest;
use App\Services\CustomerService;

class CustomersController extends Controller
{
    /**
     * @var CustomerService
     */
    private $customerService;

    /**
     * CustomerController constructor.
     * @param CustomerService $customerService
     */
    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    /**
     * Creates new customer
     * @param CreateCustomerRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(CreateCustomerRequest $request)
    {
        $customer = $this->customerService->create($request->all());

        return response()->json([
            'id' => $customer->id,
            'name' => $customer->name,
        ]);
    }
}
