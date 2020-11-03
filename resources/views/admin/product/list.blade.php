@extends('layouts.admin.app')

@section('head')
    <title> Blog</title>

    @parent
    <link href="{{url('ckeditor/plugins/codesnippet/lib/highlight/styles/googlecode.css')}}" rel="stylesheet">
    <script src="{{url("ckeditor/ckeditor.js")}}"></script>
    <script src="{{url("ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js")}}"></script>

    <link href="{{url('templates/melody/css/tab_view.css')}}" rel="stylesheet">


    <script src="{{url('templates/js/jquery.min.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="{{url('crop/css/style.css')}}"/>
    {{--    <link rel="stylesheet" type="text/css" href="{{url('crop/css/style-example.css')}}"/>--}}
    <link rel="stylesheet" type="text/css" href="{{url('crop/css/jquery.Jcrop.css')}}"/>
    <script type="text/javascript" src="{{url('crop/scripts/jquery.Jcrop.js')}}"></script>
    <script type="text/javascript" src="{{url('crop/scripts/jquery.SimpleCropper.js')}}"></script>

@endsection
@section("content")



    <div class="content-wrapper">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">لیست محصولات</h4>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
                    محصول جدید
                </button>

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                     aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">ایجاد محصول جدید</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST"
                                  action="{{route('admin.product.create',['locate'=>app('translator')->getLocale()])}}">

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-8">
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
                                                        <label>توضیحات(عربی)</label>
                                                        <textarea name="description[ar]"
                                                                  class="form-control"></textarea>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div id="file_upload" class="file-upload upload p-3">

                                                <div class="image-upload-wrap d-flex">


                                                    <textarea style="display: none" name="main_image" id="main_image"></textarea>

                                                    <div class=" dropify  "     id="form_image_preview" >   </div>

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
                <div class="row">
                    @foreach($data as $item)
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-row ">
                                        <img src="{{url('')."/".$item->thumbnail}}" class="img-lg rounded"
                                             alt="profile image">
                                        <div class="mr-3">
                                            <h6>{{$item->title}}</h6>
                                            <p class="text-muted">{{$item->description}}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


                {{--                <div class="row">--}}
                {{--                    <div class="col-12">--}}
                {{--                        <div class="table-responsive">--}}
                {{--                            <table id="order-listing" class="table">--}}
                {{--                                <thead>--}}
                {{--                                <tr>--}}
                {{--                                    <th>#</th>--}}
                {{--                                    <th>تاریخ ایجاد</th>--}}
                {{--                                    <th>عنوان</th>--}}
                {{--                                    <th>توضیحات</th>--}}
                {{--                                    <th>وضعیت انتشار</th>--}}
                {{--                                    <th>مشاهده</th>--}}
                {{--                                </tr>--}}
                {{--                                </thead>--}}
                {{--                                <tbody>--}}
                {{--                                @foreach($data as $item)--}}
                {{--                                    <tr>--}}
                {{--                                        <td>1</td>--}}
                {{--                                        <td>1399/08/03</td>--}}
                {{--                                        <td>مرتضی کریمی</td>--}}
                {{--                                        <td>{{$item->title}}</td>--}}

                {{--                                        <td>--}}
                {{--                                            <label class="badge badge-success"> منتشر شده</label>--}}
                {{--                                        </td>--}}
                {{--                                        <td>--}}
                {{--                                            <button class="btn btn-outline-primary">مشاهده</button>--}}
                {{--                                        </td>--}}
                {{--                                    </tr>--}}

                {{--                                @endforeach--}}

                {{--                                </tbody>--}}
                {{--                            </table>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
    <script>
        $('#form_image_preview').simpleCropper('#file_upload', 630, 370, 210, 120);

    </script>
@endsection

@section('js')
    @parent
    <script src="{{url('templates/melody')}}/js/dropify.js"></script>

    <script src="{{url('templates/melody/js/tab_view.js')}}"></script>

    <script>hljs.initHighlightingOnLoad();</script>
@endsection
