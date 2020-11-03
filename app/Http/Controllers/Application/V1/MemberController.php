<?php

namespace App\Http\Controllers\Application\V1;

use App\Model\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function list(Request $request)
    {
        $members = Member::where('user_id', getUserByToken($request,'id'))->paginate(50);

        return response()->json($members);
    }
}
