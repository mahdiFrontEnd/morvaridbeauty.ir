<?php

namespace App\Http\Controllers\User;

use App\Model\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function home()
    {
        return view('user.' . $this->template_name . '.home');
    }


}
