<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->guest(route('admin.login',['locate'=>app()->getLocale()]));
    }

    public function home()
    {
        return view('admin.home');
    }


}
