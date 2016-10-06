<?php

namespace App\Contracts;

interface PrinterInterface
{
    /**
     * Returns whether printer is available
     *
     * @return Bool
     */
    public function isAvailable(): Bool;

    /**
     * Prints provided content
     *
     * @param String $content
     *
     * @return Bool
     */
    public function printCard(String $content): Bool;
}
