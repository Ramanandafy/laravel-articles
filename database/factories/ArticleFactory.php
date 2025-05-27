<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         return [
        'titre' => $this->faker->sentence,
        'slug' => $this->faker->unique()->slug,
        'contenu' => $this->faker->paragraph,
        'auteur' => $this->faker->name,
        'date_publication' => $this->faker->date,
               ];
    }
}
