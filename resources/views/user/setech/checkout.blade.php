@extends('layouts.site.app')

@section('head')
    <title>تسویه حساب</title>

    @parent
@endsection
@section("content")
    <section class="page-title" style="background-image: url('{{url('')}}/templates/setech/images/background/12.jpg');">
        <div class="auto-container mt-5 pt-5">
            <h1>تسویه حساب </h1>
            <span class="title_divider"></span>

        </div>
    </section>
    <section class="cart-section">
        <div class="auto-container">
            <div class="row">
                <div class="column col-xl-6 col-lg-6 col-md-12 col-sm-12 offset-md-3">
                    <!--Order Box-->
                    <div class="order-box">
                        <h3>سفارش شما</h3>
                        <table>
                            <thead>
                            <tr>
                                <th class="product-name">کالا</th>
                                <th class="product-total">مجموع</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($carts->pricings as $pricing )

                                <tr class="cart-item">
                                    <td class="product-name">
                                        {{$pricing->product->title." (".$pricing->title.")"}}&nbsp;
                                        <span class="product-quantity">× 1</span>
                                    </td>
                                    <td class="product-total">
                                        <span class="woocommerce-Price-amount amount">{{number_format($pricing->price)}}</span>
                                        <span class="woocommerce-Price-currencySymbol">تومان</span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr class="cart-subtotal">
                                <th>مجموع</th>
                                <td><span class="amount"> {{number_format($carts->price['total'])}}  تومان </span></td>
                            </tr>

                            <tr class="cart-subtotal">
                                <th>تخفیف</th>
                                <td><span class="amount">  {{number_format($carts->price['total_percent'])}}  تومان </span></td>
                            </tr>
                            <tr class="order-total">
                                <th>مبلغ پرداختی</th>
                                <td><span class="amount" dir="ltr">{{number_format($carts->price['final'])}}   </span>تومان</td>
                            </tr>
                            </tfoot>
                        </table>

                        <!--Payment Options-->
                        <div class="payment-options">
                            <ul>
                                <li>
                                    <div class="radio-option radio-box">
                                        <input type="radio" name="payment-group" id="payment-2" checked="">
                                        <label for="payment-2"><span>پرداخت با بانک سامان</span><span
                                                class="small-text">

                            لطفا رمز دوم پویا خود را قبل از خرید فعال نمایید و نکات ایمنی را رعایت کنید

                            </span></label>
                                    </div>
                                </li>

                                <li>
                                    <div class="radio-option radio-box">
                                        <input type="radio" name="payment-group" id="payment-1">
                                        <label for="payment-1"><span>بانک ملت</span><span class="small-text"> لطفا رمز دوم پویا خود را قبل از خرید فعال نمایید و نکات ایمنی را رعایت کنید</span></label>
                                    </div>
                                </li>

                                <li>
                                    <div class="radio-option radio-box">
                                        <input type="radio" name="payment-group" id="payment-3">
                                        <label for="payment-3"><span>پرداخت در محل</span><span class="small-text"> لطفا رمز دوم پویا خود را قبل از خرید فعال نمایید و نکات ایمنی را رعایت کنید</span></label>
                                    </div>
                                </li>

                                <li>
                                    <div class="radio-option radio-box">
                                        <input type="radio" name="payment-group" id="payment-4">
                                        <label for="payment-4"><span>زرین  پرداخت</span>
                                            <img src="images/icons/paypal.png" alt="">
                                        </label>
                                    </div>
                                </li>
                            </ul>

                            <div class="btn-box">
                                <a href="#" class="theme-btn btn-style-four">پرداخت</a>
                            </div>
                        </div>
                    </div>
                    <!--End Order Box-->
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
    @parent
@endsection
