@extends('layouts.site.app')

@section('head')
    <title>تسویه حساب</title>

    @parent
@endsection
@section("content")
    <section class="page-title" style="background-image: url('{{url('')}}/templates/setech/images/background/12.jpg');">
        <div class="auto-container mt-5 pt-5">
            <h1>تسویه حساب  </h1>
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
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-name">کالا</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-price">قیمت</th>
                                    <th class="product-quantity">تعداد</th>
                                    <th class="product-subtotal">مجموع</th>
                                </tr>
                                </thead>
                                <tbody>

                          @foreach($data as $cart)
                              <tr class="cart-item">
                                  <td class="product-remove">
                                      <a href="#" class="remove"
                                      ><span class="flaticon-multiply"></span
                                          ></a>
                                  </td>
                                  <td class="product-thumbnail">
                                      <a href="shop-single.html"
                                      ><img
                                              src="images/resource/products/item-thumb-1.jpg"
                                              alt=""
                                          /></a>
                                  </td>
                                  <td class="product-name">
                                      <a href="shop-single.html">کتاب سلامتی</a>
                                  </td>
                                  <td class="product-price">3 &#xFDFC;  </td>
                                  <td class="product-quantity">
                                      <div class="item-quantity">
                                          <input
                                              type="number"
                                              class="qty"
                                              name="qty"
                                              value="1"
                                          />
                                      </div>
                                  </td>
                                  <td class="product-subtotal">
                                      <span class="amount">3 &#xFDFC;  </span>
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
                  ><span class="col price">186 ریال</span>
                        </li>

                        <li>
                  <span class="col">تخفیف</span
                  ><span class="col price">۰ تومان</span>
                        </li>
                        <li>
                  <span class="col">هزینه پرداختی</span
                  ><span class="col total-price">186 ریال</span>
                        </li>
                        <li>
                            <button type="submit" class="theme-btn btn-style-four">
                                تسویه حساب
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
    @parent
 @endsection
