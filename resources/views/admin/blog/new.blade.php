@extends('layouts.admin.app')

@section('head')

    @parent
    <title>new Blog</title>
    <script src="{{url("ckeditor/ckeditor.js")}}"></script>

    <style>
        .wizard > .content {
            min-height: 45rem;
        }

        .wizard > .content > .body {
            width: 100%;
        }
    </style>

    <link rel="stylesheet" href="{{url('templates/melody/vendors/chosen/chosen.min.css')}}">

@endsection
@section("content")

    <div class="content-wrapper">

        <div class="row">
            <div class="col-12 grid-margin">

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">بلاگ جدید</h4>
                        <form id="example-form" method="POST"
                              action="{{route("admin.blog.create",app('translator')->getLocale())}}">
{{--                            @csrf--}}
                            <div>
                                <h3>فارسی</h3>
                                <section>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>عنوان</label>
                                                <input name="title[fa]" type="text" class="form-control"
                                                       aria-describedby="emailHelp"
                                                       placeholder="ایمیل خود را وارد کنید">
                                            </div>
                                            <div class="form-group">
                                                <label>چکیده</label>
                                                <input name="abstract[fa]" type="text" class="form-control"
                                                       placeholder="رمز عبور خود راوارد کنید">
                                            </div>

                                            <div class="form-group">
                                        <textarea class="form-control" name="content[fa]" id="editor1" rows="10"
                                                  cols="80"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">


                                            <div class="form-group">
                                                <label>برچسب جدیدی بنوبسی و enter بزنید</label>
                                                <div class="card-body">
                                                    <input name="keywords[fa]" id="tags"
                                                           value="ایران,کانادا,استرالیا,مکزیک"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>توضیحات متا</label>

                                                <textarea name="descriptions[fa]" type="text" class="form-control"
                                                          placeholder="توضیحات متا"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h3>انگلیسی </h3>
                                <section>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>عنوان</label>
                                                <input name="title[en]" type="text" class="form-control"
                                                       aria-describedby="emailHelp"
                                                       placeholder="ایمیل خود را وارد کنید">
                                            </div>
                                            <div class="form-group">
                                                <label>چکیده</label>
                                                <input name="abstract[en]" type="text" class="form-control"
                                                       placeholder="رمز عبور خود راوارد کنید">
                                            </div>

                                            <div class="form-group">
                                        <textarea class="form-control" name="content[en]" id="editor1" rows="10"
                                                  cols="80"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>برچسب جدیدی بنوبسی و enter بزنید</label>
                                                <div class="card-body">
                                                    <input name="keywords[en]" id="tags"
                                                           value="ایران,کانادا,استرالیا,مکزیک"/>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <textarea name="descriptions[en]" type="text" class="form-control"
                                                          placeholder="توضیحات متا"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <h3>عربی</h3>
                                <section>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>عنوان</label>
                                                <input name="title[ar]" type="text" class="form-control"
                                                       aria-describedby="emailHelp"
                                                       placeholder="ایمیل خود را وارد کنید">
                                            </div>
                                            <div class="form-group">
                                                <label>چکیده</label>
                                                <input name="abstract[ar]" type="text" class="form-control"
                                                       placeholder="رمز عبور خود راوارد کنید">
                                            </div>

                                            <div class="form-group">
                                        <textarea class="form-control" name="content[ar]" id="editor1" rows="10"
                                                  cols="80"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>برچسب جدیدی بنوبسی و enter بزنید</label>
                                                <div class="card-body">
                                                    <input name="keywords[ar]" id="tags"
                                                           value="ایران,کانادا,استرالیا,مکزیک"/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <textarea name="descriptions[ar]" type="text" class="form-control"
                                                          placeholder="توضیحات متا"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <h3>انتشار</h3>
                                <section>

                                    <div class="row">


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>زیر مجموعه</label>
                                                <select name="category_id" class="js-example-basic-single w-100">
                                                    @foreach($categoreis as $c)
                                                        <option value="{{$c->id}}">{{$c->title}}</option>

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit">Submit</button>


                                </section>
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
    <script src="{{url('templates/melody/vendors/chosen/chosen.jquery.min.js')}}"></script>

    <script src="{{url('templates/melody/js/wizard.js')}}"></script>
    <script src="{{url('templates/melody/js/select2.js')}}"></script>

    <script>
        CKEDITOR.replace('editor1', {
            extraPlugins: 'codesnippet',

        });


    </script>

@endsection
