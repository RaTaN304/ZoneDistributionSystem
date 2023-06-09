<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'city' => substr($this->faker->city(), 0, 20),
            'country' => substr($this->faker->country(), 0, 20),
            'neighborhood' => substr($this->faker->streetAddress(), 0, 20)

        ];
    }
}