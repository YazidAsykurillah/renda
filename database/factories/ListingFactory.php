<?php

use Faker\Generator as Faker;

use App\Listing;
use App\User;
use App\Category;
use App\Brand;
use App\City;

$factory->define(App\Listing::class, function (Faker $faker) {

	$user_ids = User::all()->pluck('id')->toArray();
	$category_ids = Category::all()->pluck('id')->toArray();
	$brand_ids = Brand::all()->pluck('id')->toArray();

	$title = $faker->text(10);
    $years = [2000, 2005, 2010, 2015, 2017];
    $transmissions = ['manual', 'automatic', 'other'];
    $city_ids = City::all()->pluck('id')->toArray();
    $is_hourly = $faker->boolean();
    $hourly_price = $is_hourly == TRUE ? $faker->randomElement([100000, 200000, 300000]) : 0;

    return [
        'user_id' => $faker->randomElement($user_ids),
        'category_id' => $faker->randomElement($category_ids),
        'brand_id' => $faker->randomElement($brand_ids),
        'title' => $title,
        'slug' => str_slug($title).'-'.$faker->uuid(),
        'slug'=>$faker->sentence(10),
        'manufactured_year' => $faker->randomElement($years),
        'transmission'=>$faker->randomElement($transmissions),
        'cylinder_capacity'=>$faker->biasedNumberBetween($min = 1000, $max = 2000, $function = 'sqrt'),
        'city_id' => $faker->randomElement($city_ids),
        'is_hourly'=>$is_hourly,
        'hourly_price'=>$hourly_price,
    ];
});
