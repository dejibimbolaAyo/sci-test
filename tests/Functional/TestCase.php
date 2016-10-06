<?php

namespace App\Tests\Functional;

use App\Tests\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

abstract class TestCase extends BaseTestCase
{
    use DatabaseMigrations;
    use DatabaseTransactions;
}
