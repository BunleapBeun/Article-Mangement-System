<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleImageFactory extends Factory
{
    public function definition(): array
    {
        return [
            'article_id' => fake()->numberBetween(1, 20),
            'image' => fake()->numberBetween(1, 14) . '.jpg',
        ];
    }
}
