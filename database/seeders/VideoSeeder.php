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
                'code'           => 'zvziUZQCd-I',
                'title'          => 'iPhone 12中國銷量佳！華為出新機迎戰 躲禁令傳囤大量台積電晶片｜非凡財經新聞｜20201023',
            ],
            [
                'id'             => 2,
                'source'         => 'youtube',
                'code'           => 'A70caQprTO4',
                'title'          => '顧客轉買低價NB 英特爾Q3營收年減4% 盤後股價大跌近1成｜非凡財經新聞｜20201023',
            ],
        ];

        Video::insert($video);
    }
}
