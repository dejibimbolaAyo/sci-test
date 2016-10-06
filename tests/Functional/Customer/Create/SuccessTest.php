<?php

namespace App\Tests\Functional\Customer\Create;

use App\Models\Customer as CustomerModel;
use App\Tests\Functional\TestCase;

class SuccessTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_create_new_customer()
    {
        // arrange
        $inputParams = [
            'name' => 'Iwork Hardy',
        ];

        // act
        $this->post('/customers', $inputParams);

        // assert
        $this->assertResponseOk();
        $this->seeInDatabase('customers', $inputParams);

        $createdCustomer = CustomerModel::all()->last();
        $this->seeJsonEquals([
            'id' => $createdCustomer->id,
            'name' => $createdCustomer->name,
        ]);
    }
}
