<?php

namespace App\Tests\Functional\Customer\Create;

use App\Models\Customer as CustomerModel;
use App\Tests\Functional\TestCase;
use Illuminate\Http\Response;

class FailedTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_not_create_customer_when_required_params_are_not_provided()
    {
        // arrange
        $inputParams = [
        ];

        // act
        $this->post('/customers', $inputParams);

        // assert
        $this->assertResponseStatus(Response::HTTP_UNPROCESSABLE_ENTITY);
        $this->seeJsonEquals([
            'name' => [
                'The name field is required.'
            ]
        ]);
    }
}
