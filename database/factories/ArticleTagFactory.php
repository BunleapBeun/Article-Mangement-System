<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ArticleTagFactory extends Factory
{
    public function definition(): array
    {
        return [
            'article_id' => fake()->numberBetween(1, 20),
            'tag_id' => fake()->numberBetween(1, 3),
        ];
    }
}


