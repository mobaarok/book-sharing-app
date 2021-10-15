<?php
namespace App\Repositories;

use App\Model\Book;

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
     return   Book::create([
            "book_name" => $book->book_name,
            "donor_user_id" => $book->donor_user_id,
            'category_id' => $book->category,
         ]);
    }
}
