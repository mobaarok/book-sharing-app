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
            ["book_name" => "Story Book One", "donor_user_id" => 1, "category_id" => 3],
            ["book_name" => "Class One Guide", "donor_user_id" => 1, "category_id" => 1],
            ["book_name" => "Class Three Guide", "donor_user_id" => 1, "category_id" => 1],
            ["book_name" => "Class 7 Guide", "donor_user_id" => 1, "category_id" => 1],
            ["book_name" => "Advanced Programmnig", "donor_user_id" => 1, "category_id" => 2],
            ["book_name" => "Machine Learnig Bookk", "donor_user_id" => 1, "category_id" => 2]
        ];
        Book::insert($data);
    }
}
