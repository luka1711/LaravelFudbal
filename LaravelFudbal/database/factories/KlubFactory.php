<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\FudbalskaLiga;

class KlubFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->company(),
            'grad' => $this->faker->unique()->city(),
            'email' => $this->faker->unique()->email(),
            'website' => $this->faker->unique()->url(),
            'predsednik' => $this->faker->unique()->name(),
            'liga_id' => FudbalskaLiga::factory()
        ];

    }
}
