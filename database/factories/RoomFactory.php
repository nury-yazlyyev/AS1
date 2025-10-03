<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $hotel_id = Hotel::inRandomOrder()->value('id');
        $type=fake()->randomElement(['single','double','vip']);
        $room_number = fake()->numberBetween(101,404);
        $per_night_price = '';
        
        if ($type=='single'){
            $per_night_price=500;
        } else if ($type=='double'){
            $per_night_price=900;
        } else{
            $per_night_price=1800;
        }

        return [
            'hotel_id'=>$hotel_id,
            'room_number'=>$room_number,
            'type'=>$type,
            'per_night_price'=>$per_night_price,
            'is_available'=>fake()->boolean(50),
        ];
    }
}
