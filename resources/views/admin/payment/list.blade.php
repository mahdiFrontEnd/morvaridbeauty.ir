@extends('layouts.admin.app')

@section('head')
    <title> Payments</title>

    @parent

@endsection
@section("content")



    <div class="content-wrapper">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">لیست پرداخت ها</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="order-listing" class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>تاریخ پرداخت</th>
                                    <th>پرداخت کننده</th>
                                    <th>نام محصول</th>
                                    <th>وضعیت </th>
                                    <th>مشاهده</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                    <tr>
                                        <td>1</td>
                                        <td>1399/08/03</td>
                                        <td>مرتضی کریمی</td>
                                        <td>{{$item->title}}</td>

                                        <td>
                                            <label class="badge badge-success"> منتشر شده</label>
                                        </td>
                                        <td>
                                            <button class="btn btn-outline-primary">مشاهده</button>
                                        </td>
                                    </tr>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    @parent
    <script>hljs.initHighlightingOnLoad();</script>
@endsection
