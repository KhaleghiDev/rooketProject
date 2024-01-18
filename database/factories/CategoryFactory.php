<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $faker->text(50),
            'slug' => $faker->slug,
            'description' => $faker->paragraph(rand(8,25)),
            'meta_description'=>$faker->paragraph(1),
        ];
    }
}
