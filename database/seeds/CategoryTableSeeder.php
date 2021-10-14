<?php

use Illuminate\Database\Seeder;
use App\Model\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['category_name' => "Primary book", "slug" => "primary-book",],
            ['category_name' => "University", "slug" => "university",],
            ['category_name' => "Story book", "slug" => "story-book",]
        ];
        Category::insert($data);
    }
}
