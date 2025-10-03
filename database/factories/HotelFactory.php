<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cityId = City::inRandomOrder()->first()->value('id');
        return [
            'city_id'=>$cityId,
            'name'=>fake()->company() . ' ' . 'Hotel',
            'address'=>fake()->randomElement(['Gami','Oguzkent','Yildiz','Samelek']),
            'phone'=>fake()->phoneNumber(),
            'email'=>fake()->companyEmail(),
            'star'=>fake()->numberBetween(1,5),
        ];
    }
}
