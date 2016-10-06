<?php

namespace App\Tests\Integration\Services\Customer\Create;

use App\Models\Customer as CustomerModel;
use App\Services\CustomerService;
use App\Tests\Functional\TestCase;
use Illuminate\Http\Response;

class SuccessTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_create_customer_with_provided_params()
    {
        // arrange
        $customerService = new CustomerService();

        $inputParams = [
            'name' => 'Iwork Hardy',
        ];

        // act
        $createdCustomer = $customerService->create($inputParams);

        // assert
        $this->assertInstanceOf('App\Models\Customer', $createdCustomer);
        $this->seeInDatabase('customers', $inputParams);
        $this->seeInDatabase('customers', $createdCustomer->toArray());
    }
}
