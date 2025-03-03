<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name' =>'admin',
                'email' =>'admin@gmail.com',
                'role' =>'admin',
                'password' =>bcrypt('123456')
            ],
            [
                'name'=>'pengguna_personal',
                'email'=>'personal@gmail.com',
                'role'=>'pengguna_personal',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'pengguna_tim',
                'email'=>'tim@gmail.com',
                'role'=>'pengguna_tim',
                'password'=>bcrypt('123456')
            ],
        ];
        
        foreach($userData as $key => $val) {
            User::create($val);
        }
    }
}
