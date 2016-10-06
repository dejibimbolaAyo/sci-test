<?php

namespace App\Tests\Unit\Services\CustomerCardPrinter;

use App\Models\Customer as CustomerModel;
use App\Services\CustomerCardPrinterService;
use App\Tests\Unit\TestCase;
use Mockery as m;

class PrintTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_not_print_if_printer_is_not_available()
    {
        // arrange
        $printer = m::mock('App\Services\PrinterService');
        $customer = factory(CustomerModel::class)->make();

        $printer
            ->shouldReceive('isAvailable')
            ->andReturn(false);

        $printer
            ->shouldReceive('print')
            ->never();

        $customerCardPrinter = new CustomerCardPrinterService($printer, $customer);

        // act
        $result = $customerCardPrinter->print();

        // assert
        $this->assertFalse($result);
    }

    /**
     * @test
     */
    public function it_should_print_customer_name()
    {
        // arrange
        $printer = m::mock('App\Services\PrinterService');
        $customer = factory(CustomerModel::class)->make([
            'name' => 'Iwork Hardy',
        ]);

        $printer
            ->shouldReceive('isAvailable')
            ->once()
            ->andReturn(true);

        $printer
            ->shouldReceive('printCard')
            ->with('Iwork Hardy')
            ->once()
            ->andReturn(true);

        $customerCardPrinter = new CustomerCardPrinterService($printer, $customer);

        // act
        $result = $customerCardPrinter->print();

        // assert
        $this->assertTrue($result);
    }
}
