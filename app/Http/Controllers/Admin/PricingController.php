<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use App\Model\Pricing;
use App\Model\PricingItem;
use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class PricingController extends Controller
{


    public function get_product_items(Request $request)
    {

        $product_id = Input::get("product_id", 0);
        $items = PricingItem::where('product_id', $product_id)->orderBy("id", "DESC")->get();
        return response()->json($items);
    }

    public function index()

    {

        $html = "";
        $active = "";
        $data = Product::with(['pricing' => function ($q) {
            return $q->with('pricing_items')->orderBy("id", "DESC")->paginate(12);
        }])
            ->get();
        return view('admin.pricing.list2', compact('data', 'html', 'active'));
    }


    public function pricing_items()
    {

        $items = Product::with('pricing_items')->orderBy("id", "DESC")->get();

        return view('admin.pricing.pricing_items', compact('items'));

    }

    public function new()
    {

        $products = Product::get();
        return view('admin.pricing.new', compact('products'));

    }

    public function create(Request $request)
    {

//        return $request->all();
        $article_data = [
            'product_id' => $request->product_id,
            'admin_id' => getUser("id", "admin"),


        ];
        foreach (config('app.available_locales') as $locate) {
            $article_data[$locate]["title"] = $request->title[$locate];
            $article_data[$locate]["description"] = $request["description"][$locate];
            $article_data[$locate]["price"] = $request->price[$locate];
            $article_data[$locate]["unit"] = $request->unit[$locate];
        }

        $pricing = Pricing::create($article_data);


        $ids = $request->pricing_items_ids;
        $value = $request->value;
        for ($i = 0; $i < sizeof($ids); $i++) {
            $pricing->pricing_items()->attach([$ids[$i] => [
                'value' => $value[$i],
            ]]);
        }
//        return $article_data;

        return redirect()->route('admin.pricing', ['locate' => app('translator')->getLocale()]);


    }

    public function modify(Request $request)
    {

    }

    public function delete(Request $request)
    {

    }
}
