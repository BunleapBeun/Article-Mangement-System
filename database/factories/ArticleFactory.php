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
            'title' => fake()->sentence(4),
            'thumbnail' => 'no_photo.jpg',
            'short_desc' => fake()->sentence(10),
            'desc' => fake()->paragraph(5),
            'category_id' => fake()->randomElement([1, 2, 3]),
            'poster_id' => fake()->randomElement($ids),
        ];
    }
}
