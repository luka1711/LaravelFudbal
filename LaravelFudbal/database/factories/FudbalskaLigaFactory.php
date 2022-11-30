<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FudbalskaLigaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->unique()->company(),
            'website' => $this->faker->unique()->url(),
            'nivo' => $this->faker->numerify('##'),
            'drzava' => $this->faker->unique()->country()

        ];

    }
}
