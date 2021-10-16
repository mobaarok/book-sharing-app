<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";
    protected $fillable = ['category_name', 'slug'];

    public function books()
    {
        return $this->hasMany('App\Model\Book');
    }
}
