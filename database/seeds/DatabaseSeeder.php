<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserTableSeeder::class);
         $this->call(CategoryTableSeeder::class);
         $this->call(BookTableSeeder::class);
         $this->call(DivisionTableSeeder::class);
         $this->call(DistrictTableSeeder::class);
         $this->call(UpazilaTableSeeder::class);

    }
}
