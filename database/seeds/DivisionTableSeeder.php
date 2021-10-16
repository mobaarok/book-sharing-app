<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([

            [ 'division_name'=>'Dhaka'],
            [ 'division_name'=>'Chittagong'],
            [ 'division_name'=>'Khulna'],
            [ 'division_name'=>'Barishal'],
            [ 'division_name'=>'Rajshahi'],
            [ 'division_name'=>'Rangpur'],
            [ 'division_name'=>'Sylhet'],
            [ 'division_name'=>'Mymensingh']
        ]);
    }
}
