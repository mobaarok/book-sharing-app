<?php

namespace App\Http\Controllers;

use App\Repositories\AreasRepository;
use Illuminate\Http\Request;
use App\Repositories\BookRepository;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(BookRepository $bookRepository)
    {
        $currentUser = Auth::user();
        $books = $bookRepository->getBooksByCurrentUser($currentUser);
        // dd($books);
        return view('home', ['books' => $books]);
    }

    public function getDistrictByDivisionId(
        Request $request,
        AreasRepository $areasRepository
        ) {
        $districts = $areasRepository->getDistrictsByDivisionId($request->division_id);
        return response()->json(["districts" => $districts], 200);
    }
}
