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
            'build_id' => $this->faker->numberBetween(1,5),
            'type_id' => $this->faker->numberBetween(1,4)

        ];
    }
}
