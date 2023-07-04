<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hotel_id' => $this->faker->numberBetween(1, 20),
            'price' => $this->faker->randomFloat(2, 10, 200),
            'sea_view' => $this->faker->boolean(20),
            'room_number' => $this->faker->numberBetween(100, 500),
            'floor' => $this->faker->numberBetween(1, 8),
            'capacity' => $this->faker->numberBetween(1, 8),
        ];
    }
}
