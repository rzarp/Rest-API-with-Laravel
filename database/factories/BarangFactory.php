<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(App\BarangModel::class, function (Faker $faker) {
    return [
        'nama_barang' => $faker->colorName." ".$faker->word,
        'jumlah_barang' => $faker->numberBetween(1,100),
    ];
});
