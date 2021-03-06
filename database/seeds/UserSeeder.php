<?php

use Illuminate\Database\Seeder;
use App\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        //Create a Administrator (ADM) user for test purposes
        //Should be deleted in production
        $user = User::create([
            'name' => "administrator",
            'email' => "admin@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('admin'), // secret with bcript for testing purposes - password 'admin'
            'remember_token' => str_random(10),
            'created_by' => 1,
            'last_modified_by'=> 1
        ]);
        $user->roles()->attach('ADM');

        //Create a Theme Manager(THM) user for test purposes
        //Should be deleted in production
        $user = User::create([
            'name' => "Theme Manager",
            'email' => "theme@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('admin'), // secret with bcript for testing purposes - password 'admin'
            'remember_token' => str_random(10),
            'created_by' => 1,
            'last_modified_by'=> 1
        ]);
        $user->roles()->attach('THM');

        //Create a Moderator(MOD) user for test purposes
        //Should be deleted in production
        $user = User::create([
            'name' => "Moderator",
            'email' => "mod@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('admin'), // secret with bcript for testing purposes - password 'admin'
            'remember_token' => str_random(10),
            'created_by' => 1,
            'last_modified_by'=> 1
        ]);
        $user->roles()->attach('MOD');

        //Create a User(USR) user for test purposes
        //Should be deleted in production
        $user = User::create([
            'name' => "User",
            'email' => "user@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('admin'), // secret with bcript for testing purposes - password 'admin'
            'remember_token' => str_random(10),
            'created_by' => 1,
            'last_modified_by'=> 1
        ]);
        $user->roles()->attach('USR');
    }
}
