<?php

namespace App\Http\Controllers\Application\V1;

use App\Model\Chat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    public function chats($video_id, Request $request)
    {

        $user_id=getUserIdByToken($request);

        $chats = Chat::where('video_id',"!=", $video_id)
            ->whereRaw('received_id =? and sender_id = ? or sender_id =? and received_id = ?  ', array(25, $user_id, 25,$user_id))
            ->orderBy('id', 'ASC')
//            ->where('video_id', $video_id)
           ->with('user')
            ->paginate(1000);

        return response()->json(['status' => 200, 'data' => $chats], 200);


    }
}
