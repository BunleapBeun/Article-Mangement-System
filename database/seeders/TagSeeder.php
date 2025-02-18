<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataTag = [
            ['id' => 1, 'name' => 'temple'],
            ['id' => 2, 'name' => 'angkor'],
            ['id' => 3, 'name' => 'kompot'],
        ];

        foreach ($dataTag as $data) {
            $tag = new Tag();
            $tag->id = $data['id'];
            $tag->name = $data['name'];
            $tag->save();
        }
    }
}
