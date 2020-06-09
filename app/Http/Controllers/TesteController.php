<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{

    function primeiro(Request $request)
    {
        $fullPathToVideo = $request->video;
        $video = \Youtube::upload($fullPathToVideo, [
            'title'       => 'My Awesome Video',
            'description' => 'You can also specify your video description here.',
            'tags'	      => ['foo', 'bar', 'baz'],
            'category_id' => 10
        ], 'unlisted');

        return $video->getVideoId();
    }

    function segundo(Request $request)
    {
        $video = \Youtube::update("y52bgmeiQ54", [
            'title'       => 'My Video Fuderoso de teste',
            'description' => 'You can also specify your video description here.',
            'category_id' => 10
        ], 'unlisted');

        return $video->getVideoId();
    }

    function terceiro(Request $request)
    {
        \Youtube::delete("y52bgmeiQ54");
    }
}
