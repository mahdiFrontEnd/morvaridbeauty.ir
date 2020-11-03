<?php

namespace App\Http\Controllers\Application\V1;

use App\Http\Requests\Api\VideoListRequest;
use App\Model\Category;
use App\Model\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use Tymon\JWTAuth\Facades\JWTAuth;

class VideoController extends Controller
{


    public function get_live_info(Request $request)
    {
        $live = Video::where("user_id", 25)
            ->where("video_type", "live")
            ->withCount("views")
            ->withCount("comments")
            ->orderBy("id", "DESC")
            ->first();

        return response()->json($live);
    }

    public function categories()
    {

        $page = Input::get("page", 1);
        $categories = Cache::remember("APPLICATION_WEBINAR_categories" . $page, 600, function () {

            return Category::where('user_id', "=", 11)
                ->with(['videos' => function ($q) {
                    return $q->select('id', 'user_id', 'category_id', 'image_path as thumbnail', 'image_path as app_resize_image', 'title', 'description', 'description as very_short_description', 'description as medium_description', 'playback_link as hls240_link')
                        ->where("id", ">", 2515)
                        ->orderBy("id", "DESC");
                }])
                ->whereHas('videos', function ($q) {
                    return $q->where("id", ">", 2515);
                })
                ->select("id", "title")
                ->withCount("videos")
                ->paginate(111);
        });
        return response()->json(['status' => 200, 'data' => $categories], 200);

    }

    public function webinars(Request $request)
    {

        $page = Input::get("page", 1);
        $video = Cache::remember("APPLICATION_WEBINARS1_" . $page, 600, function () {

            return Video::select('id', 'title', 'description as short_description', 'description as medium_description', 'created_at', 'image_path', 'image_path as thumbnail', 'image_path as app_resize_image', 'duration as duration_to_clock', 'playback_link as hls240_link')
                ->withCount('comments')
                ->withCount('views')
                ->where('user_id', "=", 11)
                ->where("id", ">", 2515)
                ->orderBy('id', 'DESC')
                ->paginate(24);
        });
        return response()->json(['status' => 200, 'data' => $video], 200);


    }

    public function webinar_info($video_id)
    {
        $video = Cache::remember("APPLICATION_WEBINAR_INFO_" . $video_id, 20, function () use ($video_id) {

            return Video::where('id', $video_id)->first(['id', 'title', 'description', 'description as medium_description', 'created_at', 'image_path', 'image_path as thumbnail', 'image_path as app_resize_image']);
        });

        return response()->json(['status' => 200, 'data' => $video], 200);
    }
}
