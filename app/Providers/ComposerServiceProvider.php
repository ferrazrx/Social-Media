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
        //View composer to display all roles available
        View::composer(
            ['administration.sideMenu',
             'administration.users.create',
             'administration.users.edit',
             'administration.users.show',
             'administration.home'
            ], 
            'App\Http\ViewComposers\RolesComposer'
        );

        //View composer to display the theme selected
        View::composer(
            ['administration.master',
             'layouts.master'
            ], 
            'App\Http\ViewComposers\ThemeComposer'
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
