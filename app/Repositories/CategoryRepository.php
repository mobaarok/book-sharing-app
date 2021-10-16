<?php
namespace App\Repositories;

use App\Model\Category;
use Illuminate\Support\Str;

class CategoryRepository
{
    public function getAllCategory()
    {
        return Category::all();
    }

    public function store($data)
    {
        return Category::create([
            "category_name" => $data->category_name,
            "slug" => Str::slug($data->category_name),
        ]);
    }
}
