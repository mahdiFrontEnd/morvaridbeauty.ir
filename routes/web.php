<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/



// Site route group
$router->group(['prefix' => '', 'namespace' => 'Site'], function () use ($router) {
    Route::get('login', 'SiteController@show_login_form');
    Route::post('new_category', 'SiteController@new_category');
    Route::get('delete/{id}', 'SiteController@delete');
    Route::get('admin/login', 'SiteController@show_admin_login_form');

    Route::post('login', ['uses' => 'SiteController@login', 'as' => 'user.login']);
    Route::post('admin/login', ['uses' => 'SiteController@admin_login', 'as' => 'admin.login']);


    Route::get('/', ['uses' => 'SiteController@home', 'as' => 'site.home']);
    Route::get('/pricing', ['uses' => 'SiteController@pricing', 'as' => 'site.pricing']);
    Route::get('/blogs', ['uses' => 'SiteController@blogs', 'as' => 'site.blogs']);
    Route::get('/services', ['uses' => 'SiteController@services', 'as' => 'site.services']);
    Route::get('/blog/{slug}', ['uses' => 'SiteController@blog', 'as' => 'site.blog']);
    Route::get('/about-us', ['uses' => 'SiteController@about_us', 'as' => 'site.about_us']);
    Route::get('/contact-us', ['uses' => 'SiteController@contact_us', 'as' => 'site.contact_us']);


});

$router->group(['prefix' => 'user',
    'middleware' =>['auth:user'],
    'namespace' => 'User'], function () {
    Route::get('/home',['uses'=> 'UserController@home','as'=>'user.home']);

});

// Admin route group
$router->group(['prefix' => 'admin', 'namespace' => 'Admin','middleware'=>'auth:admin'], function () use ($router) {


    Route::get('home', ['uses' => 'HomeController@home', 'as' => 'admin.home']);

    Route::get('/logout', ['uses' => 'HomeController@logout', 'as' => 'admin.logout']);

});


// API route group
$router->group(['prefix' => 'api/v1', 'namespace' => 'Application\V1'], function () use ($router) {


    Route::post('login', 'UserController@login');
    Route::post('request_code_register', 'UserController@request_code_register');
    Route::post('register', 'UserController@register');
    Route::post('request_code_recover_password', 'UserController@request_code_recover_password');
    Route::post('recover_password', 'UserController@recover_password');

    Route::group(['middleware' => 'auth'], function () {


        Route::post('logout', 'UserController@logout');

        Route::get('posts', 'PostController@posts');


    });

});

