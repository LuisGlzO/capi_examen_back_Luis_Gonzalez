<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class user_domicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'domicilio' => $this->faker->sentence(),
            'numero_exterior' => $this->faker->regexify('[A-Z]{2}[0-4]{3}'),
            'colonia' => $this->faker->sentence(),
            'cp' => $this->faker->randomNumber(5, false),
            'ciudad' => $this->faker->word(),
            // 'user_id' => $this->faker->numberBetween(0, 100),
        ];
    }
}
