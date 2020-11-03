<?php

namespace App\Http\Controllers\Application\V2;


use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{


    public function test_ab(Request $request)
    {
        $data = Cache::remember("user1212", 20, function () {
            return User::first();
        });
        return $this->getRespond(200, 'OKK', $data);
    }


    public function profile(Request $request)
    {
        $data = Cache::remember("user1212", 20, function () {
            return Auth::user();
        });
        return $this->getRespond(200, 'OKK', $data);
    }



    public function refresh()
    {
        return $this->respondWithToken(Auth::refresh());
    }
}
