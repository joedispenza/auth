<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            "name" =>"Junior",
            "email"=> "ray98@gmail.com",
            "password" => "azerty98",
            "role_id" => 1
        ]);
        User::create([
            "name" =>"Deo",
            "email"=> "Deo98@gmail.com",
            "password" => "azerty987",
            "role_id" => 2
        ]);
        User::create([
            "name" =>"Franck",
            "email"=> "Franck98@gmail.com",
            "password" => "azerty9876",
            "role_id" => 3
        ]);
    }
}
