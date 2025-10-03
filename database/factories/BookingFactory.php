<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\Guest;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $check_in_at=fake()->dateTimeBetween('-1 week','+1 week');
        $room_id = Room::inRandomOrder()->value('id');
        $guest_id = Guest::inRandomOrder()->value('id');
        return [
            'room_id'=>$room_id,
            'guest_id'=>$guest_id,
            'check_in_at'=>$check_in_at,
            'check_out_at'=>fake()->dateTimeBetween($check_in_at,'+10 days'),
        ];
    }
}
