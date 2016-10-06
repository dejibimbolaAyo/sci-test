<?php

namespace App\Tests\Integration;

use APP\Tests\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

abstract class TestCase extends BaseTestCase
{
    use DatabaseMigrations;
    use DatabaseTransactions;
}
