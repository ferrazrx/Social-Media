<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Theme;

class ThemeComposer
{
    public function compose(View $view)
    {
        $theme = Theme::where('is_default', 1)->firstOrFail();
        $view->with('theme', $theme);
    }
}