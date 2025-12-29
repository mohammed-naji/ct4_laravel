<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(5, true),
            'image' => fake()->imageUrl(),
            'content' => fake()->sentences(5, true),
            'hours' => fake()->randomElement([40, 50, 60]),
            'price' => fake()->randomElement([100, 120, 150])
        ];
    }
}
