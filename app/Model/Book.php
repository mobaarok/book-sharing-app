<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "books";
    protected $guarded = [''];

    public function donor()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function wantedUser()
    {
        return $this->belongsToMany('App\User', 'book_want_requests', 'book_id', 'receiver_user_id')
        ->withPivot('receiver_need', 'receiver_address', 'receiver_contact_number', 'description');
    }

    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }
}
