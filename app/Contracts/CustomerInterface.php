<?php

namespace App\Contracts;

interface CustomerInterface
{
    /**
     * Returns whether printer is available
     *
     * @return String
     */
    public function getName(): String;
}
