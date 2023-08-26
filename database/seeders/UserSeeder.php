<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->fullname = 'Jhon Anderson Giraldo';
        $user->email = 'anderson052594@gmail.com';
        $user->phone = '3148898381';
        $user->photo = 'images/nophoto.png';
        $user->password = '1234';
        $user->role_id=1;
        $user->save();

        $user = new User;
        $user->fullname = 'Homero simpson';
        $user->email = 'homero@gmail.com';
        $user->phone = '3155555555';
        $user->photo = 'images/nophoto.png';
        $user->password = '1234';
        $user->role_id=2;
        $user->save();

        for ($i=0; $i < 10; $i++) { 
         
            $user = new User;
            $user->fullname = "User$i";
            $user->email = "user$i@gmail.com";
            $user->phone = "315555555$i";
            $user->photo = 'images/nophoto.png';
            $user->password = '1234';
            $user->role_id=2;
            $user->save();
        }

    }
}
