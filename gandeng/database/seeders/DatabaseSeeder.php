<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomeCarousel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        HomeCarousel::create([
            'image_url' => 'img/sample-image-1.jpg',
            'alt' => 'sample'
        ]);

        HomeCarousel::create([
            'image_url' => 'img/sample-image-2.jpg',
            'alt' => 'sample2'
        ]);

        HomeCarousel::create([
            'image_url' => 'img/sample-image-3.jpg',
            'alt' => 'sample3'
        ]);
    }
}
