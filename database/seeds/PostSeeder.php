<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Post::class, 200)->create()->each(function($post){
            $role = array('ADM', 'THM', 'USR', 'MOD');
            $user =  $post->user;
           $user->roles()->attach($role[array_rand($role,1)]);
        });
    }
}
