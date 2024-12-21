<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Art>
 */
class ArtFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'name' => $this->faker->word,
        'author' => $this->faker->paragraph,
        'description' => $this->faker->paragraph,
        'year' => $this->faker->year,
        'style' => $this->faker->word,
    ];
}

}
