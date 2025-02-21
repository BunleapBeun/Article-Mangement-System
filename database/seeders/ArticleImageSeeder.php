<?php

namespace Database\Seeders;

use App\Models\ArticleImage;
use Illuminate\Database\Seeder;

class ArticleImageSeeder extends Seeder
{
    public function run(): void
    {
        ArticleImage::factory()->count(40)->create();
    }
}
