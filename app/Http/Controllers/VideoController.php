<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Video;

class VideoController extends Controller
{
    public function comment()
    {
        $user = User::first();
        $video = Video::first();
        $user->comment($video, '追求時尚的流行風氣瀰漫全球應該是科技領先還是人類不務實呢？');
        foreach ($video->comments as $comment) {
            echo '影片標題：' . $video->title . PHP_EOL;
            echo '評論人：' . $user->name . PHP_EOL;
            echo '評論：' . $comment->comment . PHP_EOL;
        }
    }
}
