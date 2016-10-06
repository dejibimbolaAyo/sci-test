<?php

namespace App\Services;

use App\Contracts\PrinterInterface;

class PrinterService implements PrinterInterface
{
    /**
     * {@inheritdoc}
     */
    public function isAvailable(): Bool
    {

    }

    /**
     * {@inheritdoc}
     */
    public function printCard(String $content): Bool
    {
        return true;
    }
}