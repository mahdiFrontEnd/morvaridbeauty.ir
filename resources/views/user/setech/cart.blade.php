@extends('layouts.site.app')

@section('head')
    <title>about</title>

    @parent
@endsection
@section("content")
    <section class="page-title" style="background-image: url('{{url('')}}/templates/setech/images/background/12.jpg');">
        <div class="auto-container mt-5 pt-5">
            <h1>سبد خرید</h1>
            <span class="title_divider"></span>

        </div>
    </section>
    <section class="cart-section">
        <div class="auto-container">
            <div class="row">
                <div class="column col-lg-9 col-md-12 col-sm-12">
                    <!--Cart Outer-->
                    <div class="cart-outer">
                        <div class="table-outer">
                            <table class="cart-table">
                                <thead class="cart-header">
                                <tr>
                                    <th class="">&nbsp;</th>
                                    <th class="product-name">کالا</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-price">قیمت</th>
                                    <th class="product-quantity">تعداد</th>
                                    <th class="product-subtotal">مجموع</th>
                                </tr>
                                </thead>
                                <tbody>


                                @foreach($carts->pricings as $pricing )

                                    <tr class="cart-item">
                                        <td class="product-remove">
                                            <a data-cart_id="{{$pricing->id}}" class="remove"
                                            ><span class="flaticon-multiply"></span
                                                ></a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href=""
                                            ><img style="min-width: 50px !important; height: 50px"
                                                  src="{{url("")."/".$pricing->product->thumbnail}}"
                                                  alt="{{$pricing->product->title}}"
                                                /></a>
                                        </td>
                                        <td class="product-name">
                                            <a href="shop-single.html">{{$pricing->product->title." (".$pricing->title.")"}}</a>
                                        </td>
                                        <td class="product-price">{{number_format($pricing->price)}} &#xFDFC;</td>
                                        <td class="product-quantity">
                                            <div class="item-quantity">
                                                <input
                                                    type="number"
                                                    class="qty"
                                                    name="qty"
                                                    value="{{$pricing->pivot->count}}"
                                                />
                                            </div>
                                        </td>
                                        <td class="product-subtotal">
                                            <span dir="ltr" class="amount">{{number_format($pricing->price*$pricing->pivot->count)}} &#xFDFC;  </span>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="cart-options clearfix">
                            <div class="apply-coupon clearfix">
                                <div class="form-group">
                                    <input
                                        type="text"
                                        name="coupon-code"
                                        class="input"
                                        placeholder="کوپن تخفیف"
                                    />
                                </div>
                                <div class="form-group">
                                    <button type="button" class="theme-btn btn-style-four">
                                        اعمال کوپن
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="column col-lg-3 col-md-12 col-sm-12">
                    <ul class="totals-table">
                        <li><h3>مجموع سبد خرید</h3></li>

                        <li>
                  <span class="col">مجموع</span
                  ><span class="col price">{{number_format($carts->price['total'])}} ریال</span>
                        </li>

                        <li>
                  <span class="col">تخفیف</span
                  ><span class="col price">{{number_format($carts->price['total_percent'])}} تومان</span>
                        </li>
                        <li>
                  <span class="col">هزینه پرداختی</span
                  ><span class="col total-price">{{number_format($carts->price['final'])}} تومان</span>
                        </li>
                        <li>
                            <a href="{{route('user.checkout',['locate'=>app('translator')->getLocale()])}}"
                               class="theme-btn btn-style-four">تسویه
                                حساب</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <script>
        $('.remove').on('click', function () {
            $.ajax({
                    method: 'POST',
                    url: 'removeFromCart',
                    data: {'cart_id': $(this).data('cart_id')},

                    success: function (data) {
                        console.log(data)
                    },
                    error: function (error) {
                        console.log(error)

                    },
                    complete: function () {

                    }
                },
            )
            ;
            $(this).parent().parent().remove();
        })
    </script>
@endsection

@section('js')
    @parent
@endsection
