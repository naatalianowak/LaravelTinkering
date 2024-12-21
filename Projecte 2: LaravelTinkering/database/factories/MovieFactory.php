<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'title' => $this->faker->sentence,
        'description' => $this->faker->paragraph,
        'year' => $this->faker->year,
        'genre' => $this->faker->word,
        'director' => $this->faker->name,
    ];
}

}
