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
            'zone_id' => $this->faker->numberBetween(1,400),
            'room_type_id' => $this->faker->numberBetween(1,5),
            'square' => $this->faker->randomFloat(null,10,250),
            'height' => $this->faker->randomFloat(null,2,4),
            'width' => $this->faker->randomFloat(null,1,8),
            'length' => $this->faker->randomFloat(null,1,8),
            'apartmentNumber' => $this->faker->unique()->numberBetween(1,1000)

        ];
    }
}
