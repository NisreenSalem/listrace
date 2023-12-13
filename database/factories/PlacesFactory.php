<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Places>
 */
class PlacesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->company(),
            'content' => fake()->text(),
            'image' => fake()->imageUrl(600, 400),
            'rate' => fake()->randomDigit(),
            'price_from' => fake()->randomDigit(),
            'price_to' => fake()->randomDigit(),


        ];
    }
}
