<?php

namespace App\Http\Controllers\Admin;

use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::orderBy("id", "DESC")->paginate(12);
        return view('admin.product.list', compact('data'));
    }

    public function create(Request $request)
    {
        $article_data = [
            'category_id' => 1,
            'publish' => 1,
            'admin_id' => 1,
            'slug' => 1,
            'image_path' => 1,
            'thumbnail' => 1,

        ];
        foreach (config('app.available_locales') as $locate) {
            $article_data[$locate]["title"] = $request->title[$locate];
            $article_data[$locate]["description"] = $request["description"][$locate];
        }

//        return $article_data;
        Product::create($article_data);

        return redirect()->route('admin.product',['locate'=>app('translator')->getLocale()]);

    }

    public function modify(Request $request)
    {

    }

    public function delete(Request $request)
    {

    }
}
