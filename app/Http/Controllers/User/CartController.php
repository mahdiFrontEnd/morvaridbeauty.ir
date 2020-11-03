<?php

namespace App\Http\Controllers\User;

use App\Model\Order;
use App\Model\Pricing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function getTotalPrice($order)
    {

        $total_price = 0;
        $total_percent_price = 0;
        $final_price = 0;

        if ($order) {
            foreach ($order->pricings as $item) {
                $total_price += $item->pivot->count * $item->price;
            }
            $final_price = $total_price - $total_price * $order->discount / 100;
            $total_percent_price = $total_price * $order->discount / 100;

        }

        return ["total" => $total_price,
            "total_percent" => $total_percent_price,
            "final" => $final_price];
    }

    public function myCart()
    {

        $carts = Order::where("user_id", getUser('id'))->where('status', 0)->with(['pricings' => function ($q) {
            return $q->with('product');
        }])->first();

        $carts['price'] = $this->getTotalPrice($carts);


        return view('user.' . $this->template_name . '.cart', compact('carts'));
    }

    public function addToCart(Request $request)
    {


        $user_id = getUser('id');
        try {
            $cart = Order::where('user_id', $user_id)->firstOrCreate(['status' => 0], ['user_id' => $user_id]);

            $cart->pricings()->attach([$request->pricing_id => [
                'count' => $request->count
            ]
            ]);

        } catch (\Exception $e) {
            return response()->json(['data' => $e->getMessage()]);

        }
//        return response()->json(['data' => $request->all()]);

        return response()->json(['data' => 1212]);

    }


    public function removeFromCart(Request $request)
    {
        $user_id = getUser('id');
        try {
            $oredr = Order::where('status', 0)->where('user_id', $user_id)->first();
            $result = $oredr->pricings()->detach($request->cart_id);
            if($result){
                return response()->json(['status' => 200, 'message' => $user_id . 'deleted' . $request->cart_id]);
            }

            return response()->json(['status' => 0, 'message' => 'error ' ]);


        } catch (\Exception $exception) {
            return response()->json(['status' => 0, 'message' => 'error ' . $exception->getMessage()]);

        }
    }

    public function checkout()
    {
        $carts = Order::where("user_id", getUser('id'))->where('status', 0)->with(['pricings' => function ($q) {
            return $q->with('product');
        }])->first();

        $carts['price'] = $this->getTotalPrice($carts);

        return view('user.' . $this->template_name . '.checkout', compact('carts'));

    }

}
