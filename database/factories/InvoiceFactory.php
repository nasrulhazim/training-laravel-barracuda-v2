<?php

use Faker\Generator as Faker;

$factory->define(\App\Invoice::class, function (Faker $faker) {
    return [
        'reference' => date('Ymd') . '/' . $faker->unique()->word
    ];
});

$factory->define(\App\InvoiceItem::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'amount' => $faker->randomFloat(2, 10, 100),
    ];
});


