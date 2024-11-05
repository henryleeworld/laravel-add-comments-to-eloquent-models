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
        $user->comment($video, __('The pursuit of fashion has spread all over the world. Should it be due to the advancement of technology or the lack of pragmatism of human beings?'));
        foreach ($video->comments as $comment) {
            echo __('Video title: ') . $video->title . PHP_EOL;
            echo __('Commenter: ') . $user->name . PHP_EOL;
            echo __('Comment: ') . $comment->comment . PHP_EOL;
        }
    }
}
