<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataCategory = [
            ['id' => 1, 'title' => 'Mountain'],
            ['id' => 2, 'title' => 'Sea'],
            ['id' => 3, 'title' => 'Culture'],
        ];

        foreach ($dataCategory as $data) {
            $category = new Category();
            $category->id = $data['id'];
            $category->title = $data['title'];
            $category->save();
        }

        // $category = new Category();
        // $category->id = 1;
        // $category->title = 'Mountain';
        // $category->save();;

        // $category = new Category();
        // $category->id = 2;
        // $category->title = 'Sea';
        // $category->save();;
    }
}
