<?php

namespace App\Repositories;

use App\Model\BookWantedRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class BookDonationRepository
{
    public function bookWantedRequestStore(FormRequest $data)
    {
        return DB::table('book_want_requests')->insert([
            'book_id' => $data->book_id,
            'donor_user_id' => $data->donor_user_id,
            'receiver_user_id' => $data->receiver_user_id,
            'receiver_need' => $data->receiver_need,
            'receiver_address' => $data->receiver_address,
            'receiver_study' => $data->recevier_study,
            'receiver_contact_number' => $data->receiver_contact_number,
            'description' => $data->descripton,
        ]);
    }

  public function checkIsNotRequested($recevier_user, $book)
  {
        $book_collection =  DB::table('book_want_requests')->where([
            ['receiver_user_id', $recevier_user->id],
            ['book_id', $book->id]
        ])->first();
        return $isNotRequested  = collect($book_collection)->isEmpty();
  }
}
