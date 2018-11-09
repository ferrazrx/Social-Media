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

        //Create 30 random users
        factory(App\User::class, 30)->create();

        //Create a ADM user for test purposes
        //Should be deleted in production
        User::create([
            'name' => "administrator",
            'email' => "administrator@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('admin'), // secret with bcript for testing purposes - password 'admin'
            'remember_token' => str_random(10),
            'role_code' => "ADM"
            ]);

    }
}
