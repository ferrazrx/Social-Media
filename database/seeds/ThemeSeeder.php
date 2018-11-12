<?php

use Illuminate\Database\Seeder;
use App\Theme;
use Carbon\Carbon;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $theme = Theme::create([
            'name' => 'Cerulean',
            'url' => 'css/cerulean/bootstrap.min.css',
            'description' => 'A calm blue sky',
            'is_default' => false,
            'last_modified_by' => 1,
            'created_by' => 1,
        ]);

        $theme = Theme::create([
            'name' => 'Cosmo',
            'url' => 'css/cosmo/bootstrap.min.css',
            'description' => 'An ode to Metro',
            'is_default' => false,
            'last_modified_by' => 1,
            'created_by' => 1,
        ]);

        $theme = Theme::create([
            'name' => 'Cyborg',
            'url' => 'css/cyborg/bootstrap.min.css',
            'description' => 'Jet black and electric blue',
            'is_default' => false,
            'last_modified_by' => 1,
            'created_by' => 1,
        ]);

        $theme = Theme::create([
            'name' => 'Darkly',
            'url' => 'css/darkly/bootstrap.min.css',
            'description' => 'Flatly in night mode',
            'is_default' => true,
            'last_modified_by' => 1,
            'created_by' => 1,
        ]);

        $theme = Theme::create([
            'name' => 'Flatly',
            'url' => 'css/flatly/bootstrap.min.css',
            'description' => 'Flat and modern',
            'is_default' => false,
            'last_modified_by' => 1,
            'created_by' => 1,
        ]);

        $theme = Theme::create([
            'name' => 'Journal',
            'url' => 'css/journal/bootstrap.min.css',
            'description' => 'Crisp like a new sheet of paper',
            'is_default' => false,
            'last_modified_by' => 1,
            'created_by' => 1,
        ]);
        
        $theme = Theme::create([
            'name' => 'Litera',
            'url' => 'css/litera/bootstrap.min.css',
            'description' => 'The medium is the message',
            'is_default' => false,
            'last_modified_by' => 1,
            'created_by' => 1,
        ]);
        
        $theme = Theme::create([
            'name' => 'Lumen',
            'url' => 'css/lumen/bootstrap.min.css',
            'description' => 'Light and shadow',
            'is_default' => false,
            'last_modified_by' => 1,
            'created_by' => 1,
        ]);

        $theme = Theme::create([
            'name' => 'LUX',
            'url' => 'css/lux/bootstrap.min.css',
            'description' => 'A touch of class',
            'is_default' => false,
            'last_modified_by' => 1,
            'created_by' => 1,
        ]);

        $theme = Theme::create([
            'name' => 'Sketchy',
            'url' => 'css/sketchy/bootstrap.min.css',
            'description' => 'A hand-drawn look for mockups and mirth',
            'is_default' => false,
            'last_modified_by' => 1,
            'created_by' => 1,
        ]);
    }
}
