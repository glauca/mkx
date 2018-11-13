<?php

use App\Models\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'name'        => $faker->name,
        'phone'       => $faker->phoneNumber,
        'province_id' => 14,
        'city_id'     => 1174,
        'district_id' => 18627,
        'town_id'     => 18688,
        'address'     => $faker->streetAddress,
        'default'     => Address::DEFAULT_YES,
    ];
});
