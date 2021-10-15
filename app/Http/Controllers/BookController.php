<?php

namespace App\Http\Controllers;

use App\Repositories\CatalogRepository;
use App\Http\Requests\StoreBookRequest;
use Illuminate\Support\Facades\Auth;
use App\Repositories\BookRepository;

class BookController extends Controller
{
    protected $bookRepository;
    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function getBookList()
    {
        $books = $this->bookRepository->getAllBook();
        return view('book.book-list', ['books' => $books]);
    }

    public function getSingleBook($slug)
    {
        $book = $this->bookRepository->getSingleBook($slug);
        return view('book.single-book', ['book' => $book]);
    }

    public function createBook(CatalogRepository $categoryRepository)
    {
        if (Auth::check()) {
            $category = $categoryRepository->getAllCategory();
            $user = Auth::user();
            return view('book.create-book', ['category' => $category, 'user' => $user]);
        }
        return redirect()->route('login')
            ->withInput()
            ->with('status', 'Please Login to donate Book or signup.');
    }

    public function storeBook(StoreBookRequest $request, BookRepository $bookRepository)
    {
        $validated = $request->validated();
        $res =  $bookRepository->storeBook($request);
        return redirect()->route('booklist');
    }
}
