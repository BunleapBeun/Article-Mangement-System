<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    public function definition(): array
    {
        $ids = User::get(['id'])->pluck('id')->toArray();

        return [
            'title' => fake()->sentences(1, true),
            'thumbnail' => 'no_photo.jpg',
            'short_desc' => fake()->sentences(2, true),
            'desc' => fake()->paragraphs(4, true),
            // 'category_id' => fake()->randomElement([1, 2, 3]),
            'category_id' => fake()->numberBetween(1, 3),
            'poster_id' => fake()->randomElement($ids),
            // 'poster_id' => fake()->numberBetween(1, 10),
        ];
    }
}
