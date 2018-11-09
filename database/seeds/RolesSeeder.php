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
        //Create User (Default) role
        $user = Role::create([
            'code'=> 'ADM',
            'name' => 'Administrator'
        ]);
        //Create Theme Manager role
        $user = Role::create([
            'code'=> 'THM',
            'name' => 'Theme Manager'
        ]);
         //Create  (Default) role
         $user = Role::create([
            'code'=> 'GST',
            'name' => 'Guest'
        ]);
        
    }
}
