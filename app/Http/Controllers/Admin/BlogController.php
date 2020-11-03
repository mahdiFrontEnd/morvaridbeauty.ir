<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use App\Model\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    public function index(Request $request)
    {

        $data = Blog::orderBy("id", "DESC")->paginate(12);
        return view('admin.blog.list', compact('data'));
    }

    public function new()
    {

        $categoreis=Category::get();
        return view('admin.blog.new',compact('categoreis'));
    }

    public function edit()
    {
        return view('admin.blog.edit');
    }

    public function create(Request $request)
    {
        return $request->all();

        $article_data = [
            'category_id' => 1,
            'admin_id' => 1,
            'slug' => 1,
            'image_path' => 1,

        ];
        foreach (config('app.available_locales') as $locate) {
            $article_data[$locate]["title"] = $request->title[$locate];
            $article_data[$locate]["content"] = $request["content"][$locate];
            $article_data[$locate]["abstract"] = $request->abstract[$locate];
        }

//        $article_data = [
//            'admin_id' => 1,
//            'slug' => 1,
//            'image_path' => 1,
//            'fa' => [
//                'title' => 1,
//                'content' => 1,
//                'abstract' => 1,
//
//
//            ],
//            'en' => [
//                'title' => 2,
//                'content' => 2,
//                'abstract' => 1,
//
//            ],
//
//            'ar' => [
//                'title' => 22,
//                'content' => 33,
//                'abstract' => 1,
//
//            ],
//        ];

        // Now just pass this array to regular Eloquent function and Voila!
        Blog::create($article_data);

        return redirect()->route('admin.blogs',['locate'=>app('translator')->getLocale()]);


    }

    public function modify($id, Request $request)
    {
        $article_data = [
            'en' => [
                'title' => $request->input('en_title'),
                'full_text' => $request->input('en_full_text')
            ],
            'es' => [
                'title' => $request->input('es_title'),
                'full_text' => $request->input('es_full_text')
            ],
        ];

        $article = Blog::findOrFail($id);
        $article->update($article_data);

        return back();

    }


}
