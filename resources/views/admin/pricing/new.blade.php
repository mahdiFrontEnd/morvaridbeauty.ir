@extends('layouts.admin.app')

@section('head')
    <title> Blog</title>

    @parent
    <link href="{{url('ckeditor/plugins/codesnippet/lib/highlight/styles/googlecode.css')}}" rel="stylesheet">
    <script src="{{url("ckeditor/ckeditor.js")}}"></script>
    <script src="{{url("ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js")}}"></script>
    <link href="{{url('templates/melody/css/tab_view.css')}}" rel="stylesheet">

@endsection
@section("content")



    <div class="content-wrapper">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title"> تعرفه جدید </h4>


                <div class="row">
                    <div class="col-12">
                        <form method="POST" id="pricing_form"
                              action="{{route('admin.pricing.create',['locate'=>app('translator')->getLocale() ])}}">

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="tabs">
                                            <div class="tab-button-outer">
                                                <ul id="tab-button">
                                                    <li><a href="#tab01">فارسی </a></li>
                                                    <li><a href="#tab02">انگلیسی</a></li>
                                                    <li><a href="#tab03">عربی</a></li>

                                                </ul>
                                            </div>

                                            <div id="tab01" class="tab-contents">
                                                <div class="form-group">
                                                    <label>عنوان(فارسی)</label>
                                                    <input name="title[fa]" class="form-control"/>
                                                </div>

                                                <div class="form-group">
                                                    <label>قیمت</label>
                                                    <input type="number" name="price[fa]" class="form-control"/>
                                                </div>

                                                <div class="form-group">
                                                    <label>واحد</label>
                                                    <select name="unit[fa]" class="form-control">
                                                        <option value="R">ریال</option>
                                                        <option value="T">تومان</option>
                                                        <option value="D">دلار</option>
                                                        <option value="Y">یورو</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>توضیحات(فارسی)</label>
                                                    <textarea name="description[fa]"
                                                              class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div id="tab02" class="tab-contents">
                                                <div class="form-group">
                                                    <label>عنوان(انگلیسی)</label>
                                                    <input name="title[en]" class="form-control"/>
                                                </div>
                                                <div class="form-group">
                                                    <label>قیمت</label>
                                                    <input type="number" name="price[en]" class="form-control"/>
                                                </div>

                                                <div class="form-group">
                                                    <label>واحد</label>
                                                    <select name="unit[en]" class="form-control">
                                                        <option value="R">ریال</option>
                                                        <option value="T">تومان</option>
                                                        <option value="D">دلار</option>
                                                        <option value="Y">یورو</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>توضیحات(انگلیسی)</label>
                                                    <textarea name="description[en]"
                                                              class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <div id="tab03" class="tab-contents">
                                                <div class="form-group">
                                                    <label>عنوان(عربی)</label>
                                                    <input name="title[ar]" class="form-control"/>
                                                </div>
                                                <div class="form-group">
                                                    <label>قیمت</label>
                                                    <input type="number" name="price[ar]" class="form-control"/>
                                                </div>

                                                <div class="form-group">
                                                    <label>واحد</label>
                                                    <select name="unit[ar]" class="form-control">
                                                        <option value="R">ریال</option>
                                                        <option value="T">تومان</option>
                                                        <option value="D">دلار</option>
                                                        <option value="Y">یورو</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>توضیحات(عربی)</label>
                                                    <textarea name="description[ar]"
                                                              class="form-control"></textarea>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>محصول</label>
                                            <select id="product_id" name="product_id" class="form-control">
                                                @foreach($products as $product)
                                                    <option value="{{$product->id}}">{{$product->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <div class="card">
                                                <div class="card-body">

                                                    <div class="form-group">

                                                        <label>ویژگی</label>
                                                        <div class="products_items"></div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">ایجاد</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>

                                </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    @parent
    <script src="{{url('templates/melody/js/tab_view.js')}}"></script>

    <script>hljs.initHighlightingOnLoad();</script>

    <script>

        $('#product_id').on("change", function (event) {

            $.ajax({
                method: 'GET',
                data: {"product_id": $(this).val()},
                url: 'get_product_items',
                success: function (data) {
                    html = '';
                    $.each(data, function (key, val) {

                        html += '   <div class="form-group">\n' +
                            '                                                                <div class="row">\n' +
                            '                                                                    <div class="col-md-8">\n' +
                            '                                                                        <p class="flex-fill">'+val["title"]+'</p>\n' +
                            '                                                                    </div>\n' +
                            '                                                                    <div class="col-md-4">\n' +
                            '                                                                        <input style="display: none"\n' +
                            '                                                                               name="pricing_items_ids[]"\n' +
                            '                                                                               value="'+val["id"]+'" type="text"\n' +
                            '                                                                               class=" form-control   todo-list-input"/>\n' +
                            '\n' +
                            '                                                                        <input name="value[]" type="text"\n' +
                            '                                                                               class=" form-control   todo-list-input"\n' +
                            '                                                                               placeholder="مقدار">\n' +
                            '                                                                    </div>\n' +
                            '                                                                </div>\n' +
                            '                                                            </div>';


                    });
                    $('.products_items').html(html)

                },
                error: function (error) {
                    console.log(error)

                },
                complete: function () {

                }
            })
        });


        $('#pricing_form2').on('click', function (e) {
            var formArray = $(this).serialize();
            e.preventDefault()
            $.ajax({
                method: 'POST',
                data: formArray,
                url: $(this).attr('action'),
                success: function (data) {

                    console.log(data)
                },
                error: function (error) {
                    console.log(error)

                },
                complete: function () {

                }
            })
        })

    </script>
@endsection
