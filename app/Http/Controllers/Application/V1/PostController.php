<?php

namespace App\Http\Controllers\Application\V1;

use App\Model\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function posts()
    {

        $video = Cache::remember("APPLICATION_POSTS_" , 600, function ()  {

            return Video::select('id', 'title', 'description', 'description as short_description', 'description as medium_description', 'created_at', 'image_path', 'image_path as app_resize_image', 'image_path as thumbnail', 'duration as duration_to_clock', 'playback_link as hls240_link')
                ->withCount('comments')
                ->withCount('views')
                ->where('user_id', 11)
                ->where("id", ">", 2561)
                ->orderBy('id', 'DESC')
                ->paginate(200);
        });
        return response()->json(['status' => 200, 'data' => $video], 200);

    }
}
