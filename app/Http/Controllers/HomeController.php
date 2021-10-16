<?php

namespace App\Http\Controllers;

use App\Repositories\AreasRepository;
use Illuminate\Http\Request;
use App\Repositories\BookRepository;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        return view('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard(BookRepository $bookRepository)
    {
        $currentUser = Auth::user();
        $books = $bookRepository->getBooksByCurrentUser($currentUser);
        return view('home', ['books' => $books, 'user' => $currentUser]);
    }

    public function getDistrictByDivisionId(
        Request $request,
        AreasRepository $areasRepository
        ) {
        $districts = $areasRepository->getDistrictsByDivisionId($request->division_id);
        return response()->json(["districts" => $districts], 200);
    }
}
