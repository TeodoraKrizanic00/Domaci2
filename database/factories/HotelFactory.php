<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->catchPhrase . ' resort',
            'place_id' => $this->faker->numberBetween(1, 15),
            'address' => $this->faker->streetAddress,
            'stars' => $this->faker->numberBetween(1, 5),
            'email' => $this->faker->companyEmail,
            'phone' => $this->faker->phoneNumber,
        ];
    }
}
