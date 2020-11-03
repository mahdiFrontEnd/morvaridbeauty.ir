<?php

namespace App\Http\Controllers\Application\V1;

use App\Model\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use function foo\func;

class CommentController extends Controller
{
    public function comments($video_id)
    {
        $status = 0;
        $comments = Cache::remember("APPLICATION_COMMENT_" . $video_id, 600, function () use ($video_id) {

            $comments = Comment::where('video_id', $video_id)
                ->with(["user" => function ($q) {
                    return $q->select('id', 'fname', 'lname', 'image_path');
                }])
                ->paginate(36);

            return $comments;
        });
        if (sizeof($comments) > 0) {
            $status = 200;
        }
        return response()->json(['status' => $status, 'data' => $comments], 200);


    }
}
