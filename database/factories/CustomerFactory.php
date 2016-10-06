<?php

use App\Models\Customer as CustomerModel;
use Faker\Generator as FakerGenerator;

$factory->define(CustomerModel::class, function (FakerGenerator $faker) {
    return [
        'name' => $faker->name,
    ];
});
