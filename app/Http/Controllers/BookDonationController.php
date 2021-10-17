<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookWantedRequest;
use App\Repositories\BookDonationRepository;
use Illuminate\Http\Request;

class BookDonationController extends Controller
{
    protected $bookDonationRepo;
    public function __construct(BookDonationRepository $bookDonationRepo)
    {
        $this->bookDonationRepo = $bookDonationRepo;
    }

    public function bookWantedRequest(StoreBookWantedRequest $request)
    {
        $this->bookDonationRepo->bookWantedRequestStore($request);
        return redirect()->back()
            ->with('messageType', 'success')
            ->with('message', 'Your requset successful, we will contact you');
    }
}
