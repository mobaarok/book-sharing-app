<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [ "name" => "Mobarok", "email" => "rubelc04@gmail.com", "role" => "admin", "password" => bcrypt('admin')],
            [ "name" => "User", "email" => "user@gmail.com", "role" => 'user', "password" => bcrypt('user')]
        ];
        User::insert($data);
    }
}
