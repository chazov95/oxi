<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LevelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'build_id' => $this->faker->numberBetween(1, 5),
            'level' => $this->faker->numberBetween(1, 10),
        ];
    }
}
