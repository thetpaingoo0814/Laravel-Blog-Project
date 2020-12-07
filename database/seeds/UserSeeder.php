<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = new User;
       $user->name="Thet Paing Oo";
       $user->email = "thetpaingoo@gmail.com";
       $user->password = Hash::make('password');
       $user->save();
    }
}
