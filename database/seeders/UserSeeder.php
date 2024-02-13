<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "username"=> "lonjher",
                "name" => "Abdul Walid",
                "email" => "lonjhern@myscholl.com",
                "password" => bcrypt("password"),
                "jabatan_id" => 1
            ],
            [
                'username' => 'kepala',
                "name" => "Kepala Sekolah",
                "email" => "kepala@myscholl.com",
                "password" => bcrypt("password"),
                "jabatan_id" => 2
            ],
            [
                'username' => 'sekretaris',
                "name" => "Sekretaris",
                "email" => "sekretaris@myscholl.com",
                "password" => bcrypt("password"),
                "jabatan_id" => 3
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
