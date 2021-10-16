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
            ["book_name" => "Story Book One", "slug" => "story-book-one", "user_id" => 1, "category_id" => 3, 'donation_division' => 'chittagong', 'donation_district' => 'feni', 'donation_address' => 'mizan road', 'donation_contact_number' => '9901248198'],
            ["book_name" => "Class One Guide", "slug" => "class-one-guide", "user_id" => 1, "category_id" => 1,'donation_division' => 'chittagong', 'donation_district' => 'feni', 'donation_address' => 'mizan road', 'donation_contact_number' => '9901248198'],
            ["book_name" => "Class Three Guide", "slug" => "class-three-book", "user_id" => 1, "category_id" => 1,'donation_division' => 'chittagong', 'donation_district' => 'feni', 'donation_address' => 'mizan road', 'donation_contact_number' => '9901248198'],
            ["book_name" => "Class 7 Guide", "slug" => "sevenb-bok", "user_id" => 1, "category_id" => 1, 'donation_division' => 'chittagong', 'donation_district' => 'feni', 'donation_address' => 'mizan road', 'donation_contact_number' => '9901248198'],
            ["book_name" => "Advanced Programmnig", "slug" => "programming", "user_id" => 1, "category_id" => 2, 'donation_division' => 'chittagong', 'donation_district' => 'feni', 'donation_address' => 'mizan road', 'donation_contact_number' => '9901248198'],
            ["book_name" => "Machine Learnig Bookk", "slug" => "machine-l", "user_id" => 1, "category_id" => 2,'donation_division' => 'chittagong', 'donation_district' => 'feni', 'donation_address' => 'mizan road', 'donation_contact_number' => '9901248198']
        ];
        Book::insert($data);
    }
}
