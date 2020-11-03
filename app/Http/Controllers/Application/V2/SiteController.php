<?php

namespace App\Http\Controllers\Application\V2;


use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class SiteController extends Controller
{



    private $count=0;
    public function home(Request $request)
    {

 return getBrowser();
        $data = Cache::remember("user1", 20, function () {
            return User::paginate(12);


        });
//         $results = app('db')->select("SELECT id FROM users");
        return view('home', compact('data'));
    }


    public function login(LoginRequest $request)
    {
        //validate incoming request
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        $credentials = $request->only(['email', 'password']);
        if (!$token = Auth::attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }


}
