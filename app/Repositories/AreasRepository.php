<?php
namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class AreasRepository
{
    public function getAllDivision()
    {
        return DB::table('divisions')->get();
    }

    public function getDistrictsByDivisionId($id)
    {
        return DB::table('districts')->where('division_id', $id)->get();
    }
}
