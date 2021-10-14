<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "books";
    protected $guarded = [''];

    public function donor()
    {
        return $this->belongsTo('App\User', 'donor_user_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }
}
