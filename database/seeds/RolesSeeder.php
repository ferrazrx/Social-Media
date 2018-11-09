<?php

use Illuminate\Database\Seeder;
use App\Role;


class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Administrator role
        $user = Role::create([
            'code'=> 'ADM',
            'name' => 'Administrator'
        ]);
        // Create Moderator role
        $user = Role::create([
            'code'=> 'MOD',
            'name' => 'Moderator'
        ]);
        //Create Theme Manager role
        $user = Role::create([
            'code'=> 'THM',
            'name' => 'Theme Manager'
        ]);
         //Create User (Default) role
         $user = Role::create([
            'code'=> 'USR',
            'name' => 'User'
        ]);
        
        
    }
}
