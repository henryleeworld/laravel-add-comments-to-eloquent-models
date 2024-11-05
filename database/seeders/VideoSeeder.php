<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $video = [
            [
                'id'             => 1,
                'source'         => 'youtube',
                'code'           => 'Idq5igOxQo4',
                'title'          => __('Street Fighter 6 Character Guide | Terry'),
            ],
            [
                'id'             => 2,
                'source'         => 'youtube',
                'code'           => '2jGJ78MqDY',
                'title'          => __('"MARVEL vs. CAPCOM Fighting Collection: Arcade Classics" launch promotional video'),
            ],
        ];

        Video::insert($video);
    }
}
