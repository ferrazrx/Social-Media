<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
        View::composer(
            ['administration.sideMenu',
             'administration.users.create',
             'administration.users.edit',
             'administration.users.show'
            ], 
            'App\Http\ViewComposers\RolesComposer'
        );
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
