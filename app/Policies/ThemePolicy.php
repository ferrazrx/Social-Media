<?php

namespace App\Policies;

use App\User;
use App\Theme;
use Illuminate\Auth\Access\HandlesAuthorization;

class ThemePolicy
{
    use HandlesAuthorization;

    //Before check if User is Administrator
    public function before($user, $ability)
    {
        if ($user->isAdministrator()) {
            return true;
        }
    }
    /**
     * Determine whether the user can view the theme.
     *
     * @param  \App\User  $user
     * @param  \App\Theme  $theme
     * @return mixed
     */
    public function view(User $user)
    {;
        return $user->isThemeManager();
    }

    /**
     * Determine whether the user can create themes.
     
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isThemeManager();
    }

    /**
     * Determine whether the user can update the theme.
     *
     * @param  \App\User  $user
     * @param  \App\Theme  $theme
     * @return mixed
     */
    public function update(User $user)
    {
        return $user->isThemeManager();
    }

    /**
     * Determine whether the user can delete the theme.
     *
     * @param  \App\User  $user
     * @param  \App\Theme  $theme
     * @return mixed
     */
    public function delete(User $user)
    {
        return $user->isThemeManager();
    }

    /**
     * Determine whether the user can restore the theme.
     *
     * @param  \App\User  $user
     * @param  \App\Theme  $theme
     * @return mixed
     */
    public function restore(User $user)
    {
        return $user->isThemeManager();
    }

    /**
     * Determine whether the user can permanently delete the theme.
     *
     * @param  \App\User  $user
     * @param  \App\Theme  $theme
     * @return mixed
     */
    public function forceDelete(User $user)
    {
        return $user->isThemeManager();
    }
}
