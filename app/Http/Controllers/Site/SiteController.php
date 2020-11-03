<?php

namespace App\Http\Controllers\Site;

use App\Model\Blog;

use App\Model\Pricing;
use App\Model\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class SiteController extends Controller
{

    public function show_login_form()
    {
        return view('user.' . $this->template_name . '.login');

    }

    public function show_admin_login_form()
    {
        return view('admin.login');

    }


    public function admin_login(Request $request)
    {

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {

            return redirect(route('admin.home'));

        } else {

            return redirect(route('admin.login'));

        }

    }

    public function login(Request $request)
    {

        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {

            return redirect(route('user.home'));

        } else {

            return redirect(route('user.login'));

        }

    }


    public function home()
    {

        return view('site.amella.home');
    }



    public function blogs()
    {


        $blogs=Blog::paginate(20);
        return view('site.amella.blogs', compact('blogs'));


    }

    public function pricing()
    {


        $pricings=Pricing::paginate(20);
        return view('site.amella.pricing', compact('pricings'));


    }


      public function services()
    {


        $services=Blog::get();
        return view('site.amella.services', compact('services'));


    }



    public function blog($slug)
    {

        $blog = Blog::where('slug',urldecode($slug))->first();
        return view('site.amella.blog', compact('blog'));


    }

    public function about_us()
    {
        return view('site.amella.about-us');

    }

    public function contact_us()
    {
        return view('site.amella.contact-us');
    }


}
