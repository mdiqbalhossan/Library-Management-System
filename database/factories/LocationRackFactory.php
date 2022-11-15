<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LocationRack>
 */
class LocationRackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->unique()->randomElement(['A1','A2','A3','B1','B2','B3','C3','C4','C5','D1','D2','D3','H1','H2','H3']),
            'status' => fake()->randomElement([0,1]),
        ];
    }
}
