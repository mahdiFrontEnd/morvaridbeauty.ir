<?php

namespace App\Http\Controllers;

use App\Model\Order;
use App\Model\Product;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    public $template_name;




    public function __construct()
    {
                $this->template_name = 'setech';

    }



    protected function getRespond($status, $message, $data, $errors = [])
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data,
            'errors' => $errors
        ], 200);
    }

    protected function respondWithToken($token)
    {
        return response()->json([


            'status' => 200,
            'message' => "ورود با موفقیت انجام شد",
            'token' => $token,
            'user_id' => Auth::user()->id,
            'type' => 'bearer', // you can ommit this
            'is_set_password' => boolval(Auth::user()->password), // you can ommit this
//            'expires' => Auth::factory()->getTTL(), // time to expiration
        ], 200);
    }
}
