<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $video = [
            [
                'id'             => 1,
                'source'         => 'youtube',
                'code'           => 'wXrKSQF-LhY',
                'title'          => __('Street Fighter 6 Character Guide | Mai'),
            ],
            [
                'id'             => 2,
                'source'         => 'youtube',
                'code'           => 'revlOocmy4o',
                'title'          => __('"Capcom Fighting Collection 2" Pre-Order Trailer'),
            ],
        ];

        Video::insert($video);
    }
}
