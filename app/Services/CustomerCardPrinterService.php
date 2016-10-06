<?php

namespace App\Services;

use App\Contracts\PrinterInterface;
use App\Models\Customer as CustomerModel;

class CustomerCardPrinterService
{
    /**
     * @var PrinterInterface
     */
    private $printer;

    /**
     * @var CustomerModel
     */
    private $customer;

    /**
     * CustomerCardPrinter constructor.
     * @param PrinterInterface $printer
     * @param CustomerModel $customer
     */
    public function __construct(PrinterInterface $printer, CustomerModel $customer)
    {
        $this->printer = $printer;
        $this->customer = $customer;
    }

    /**
     * Prints customer name
     *
     * @return Bool
     */
    public function print(): Bool
    {
        if (! $this->printer->isAvailable()){
            return false;
        }

        return $this->printer->printCard($this->customer->name);
    }
}