<?php
namespace App\Repositories;

use App\Model\Category;

class CatalogRepository
{
    public function getAllCategory()
    {
        return Category::all();
    }
}
