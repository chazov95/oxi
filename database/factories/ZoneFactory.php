<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ZoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'level_id' => $this->faker->numberBetween(1, 10),
            'zone_type_id' => $this->faker->numberBetween(1, 4)

        ];
    }
}
