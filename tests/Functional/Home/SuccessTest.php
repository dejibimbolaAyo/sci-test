<?php

namespace App\Tests\Functional\Home;

use App\Tests\Functional\TestCase;

class SuccessTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel');
    }
}
