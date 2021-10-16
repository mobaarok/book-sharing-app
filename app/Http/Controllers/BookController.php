<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Repositories\AreasRepository;
use App\Repositories\BookRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    protected $bookRepository;
    protected $categoryRepository;
    protected $areasRepository;

    public function __construct(
        BookRepository $bookRepository,
        CategoryRepository $categoryRepository,
        AreasRepository $areasRepository
    ) {
        $this->bookRepository = $bookRepository;
        $this->categoryRepository = $categoryRepository;
        $this->areasRepository = $areasRepository;
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

    public function createBook()
    {
        $user = Auth::user();
        $divisions = $this->areasRepository->getAllDivision();
        $category = $this->categoryRepository->getAllCategory();

        return view('book.create-book', [
            'category' => $category,
            'user' => $user,
            'divisions' => $divisions
        ]);
    }

    public function storeBook(StoreBookRequest $request, BookRepository $bookRepository)
    {
        $validated = $request->validated();
        $res = $bookRepository->storeBook($request);
        return redirect()->route('booklist');
    }

    public function editBook($slug)
    {
        $book = $this->bookRepository->getSingleBook($slug);
        $this->authorize('update-book', $book);
        $category = $this->categoryRepository->getAllCategory();
        return view('book.edit-book', ['book' => $book, 'category' => $category]);
    }

    public function updateBook(UpdateBookRequest $request, $slug)
    {
        $this->bookRepository->updateBook($request, $slug);
        return redirect()->route('home');
    }
}
