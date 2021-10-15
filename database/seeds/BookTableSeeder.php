<?php

use Illuminate\Database\Seeder;
use App\Model\Book;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["book_name" => "Story Book One", "slug" => "story-book-one", "donor_user_id" => 1, "category_id" => 3],
            ["book_name" => "Class One Guide", "slug" => "class-one-guide", "donor_user_id" => 1, "category_id" => 1],
            ["book_name" => "Class Three Guide", "slug" => "class-three-book", "donor_user_id" => 1, "category_id" => 1],
            ["book_name" => "Class 7 Guide", "slug" => "sevenb-bok", "donor_user_id" => 1, "category_id" => 1],
            ["book_name" => "Advanced Programmnig", "slug" => "programming", "donor_user_id" => 1, "category_id" => 2],
            ["book_name" => "Machine Learnig Bookk", "slug" => "machine-l", "donor_user_id" => 1, "category_id" => 2]
        ];
        Book::insert($data);
    }
}
