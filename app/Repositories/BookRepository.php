<?php
namespace App\Repositories;

use App\Model\Book;
use Illuminate\Support\Str;

class BookRepository
{
    public function getAllBook()
    {
        return Book::with('donor:id,name', 'category')->paginate(10);
    }

    public function getSingleBook($slug)
    {
        return Book::where('slug', $slug)->with('donor:id,name', 'category')->first();
    }

    public function storeBook($book)
    {
        return Book::create([
            "book_name" => $book->book_name,
            "slug" => Str::slug($book->book_name),
            "user_id" => $book->user_id,
            'category_id' => $book->category,
            'donation_division' => $book->division,
            'donation_district' => $book->district,
            'donation_address' => $book->address,
            'donation_contact_number' => $book->contact_number,
            'study_class' => $book->study_class,
        ]);
    }

    public function updateBook($data, $slug)
    {
        return Book::where('slug', $slug)->update([
            "book_name" => $data->book_name,
            "slug" => Str::slug($data->book_name),
            "user_id" => $data->user_id,
            'category_id' => $data->category,
        ]);
    }

    public function getBooksByCurrentUser($currentUser)
    {
        return Book::with('category')->where('user_id', $currentUser->id)->get();
    }

}
