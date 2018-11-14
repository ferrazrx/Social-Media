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
            'cdn_url' => 'https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/cerulean/bootstrap.min.css',
            'local_url' => 'css/cerulean/bootstrap.min.css',
            'description' => 'A calm blue sky',
            'is_default' => false,
            'last_modified_by' => 1,
            'created_by' => 1,
        ]);

        $theme = Theme::create([
            'name' => 'Cosmo',
            'cdn_url' => 'https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/cosmo/bootstrap.min.css',
            'local_url' => 'css/cosmo/bootstrap.min.css',
            'description' => 'An ode to Metro',
            'is_default' => false,
            'last_modified_by' => 1,
            'created_by' => 1,
        ]);

        $theme = Theme::create([
            'name' => 'Cyborg',
            'cdn_url' => 'https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/cyborg/bootstrap.min.css',
            'local_url' => 'css/cyborg/bootstrap.min.css',
            'description' => 'Jet black and electric blue',
            'is_default' => false,
            'last_modified_by' => 1,
            'created_by' => 1,
        ]);

        $theme = Theme::create([
            'name' => 'Darkly',
            'cdn_url' => 'https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/darkly/bootstrap.min.css',
            'local_url' => 'css/darkly/bootstrap.min.css',
            'description' => 'Flatly in night mode',
            'is_default' => true,
            'last_modified_by' => 1,
            'created_by' => 1,
        ]);

        $theme = Theme::create([
            'name' => 'Flatly',
            'cdn_url' => 'https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/flatly/bootstrap.min.css',
            'local_url' => 'css/flatly/bootstrap.min.css',
            'description' => 'Flat and modern',
            'is_default' => false,
            'last_modified_by' => 1,
            'created_by' => 1,
        ]);

        $theme = Theme::create([
            'name' => 'Journal',
            'cdn_url' => 'https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/journal/bootstrap.min.css',
            'local_url' => 'css/journal/bootstrap.min.css',
            'description' => 'Crisp like a new sheet of paper',
            'is_default' => false,
            'last_modified_by' => 1,
            'created_by' => 1,
        ]);
        
        $theme = Theme::create([
            'name' => 'Litera',
            'cdn_url' => 'https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/litera/bootstrap.min.css',
            'local_url' => 'css/litera/bootstrap.min.css',
            'description' => 'The medium is the message',
            'is_default' => false,
            'last_modified_by' => 1,
            'created_by' => 1,
        ]);
        
        $theme = Theme::create([
            'name' => 'Lumen',
            'cdn_url' => 'https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/lumen/bootstrap.min.css',
            'local_url' => 'css/lumen/bootstrap.min.css',
            'description' => 'Light and shadow',
            'is_default' => false,
            'last_modified_by' => 1,
            'created_by' => 1,
        ]);

        $theme = Theme::create([
            'name' => 'LUX',
            'cdn_url' => 'https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/lux/bootstrap.min.css',
            'local_url' => 'css/lux/bootstrap.min.css',
            'description' => 'A touch of class',
            'is_default' => false,
            'last_modified_by' => 1,
            'created_by' => 1,
        ]);

        $theme = Theme::create([
            'name' => 'Sketchy',
            'cdn_url' => 'https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/sketchy/bootstrap.min.css',
            'local_url' => 'css/sketchy/bootstrap.min.css',
            'description' => 'A hand-drawn look for mockups and mirth',
            'is_default' => false,
            'last_modified_by' => 1,
            'created_by' => 1,
        ]);
    }
}
