<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Role;

class RolesComposer
{
    public function compose(View $view)
    {
        $roles = Role::all();
        $view->with('roles', $roles);
    }
}