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
                <h4 class="card-title"> آیتم ها </h4>


                <div class="row">
                    <div class="col-12">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">

                                    <div class="mt-4">
                                        <div class="accordion accordion-bordered" id="accordion-2" role="tablist">
                                            @foreach($items as $item)

                                                <div class="card">
                                                    <div class="card-header" role="tab" id="heading-4">
                                                        <h6 class="mb-0">
                                                            <a data-toggle="collapse" href="#collapse-{{$item->id}}"
                                                               aria-expanded="false" aria-controls="collapse-{{$item->id}}"
                                                               class="collapsed">
                                                                {{$item->title}}
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapse-{{$item->id}}" class="collapse" role="tabpanel"
                                                         aria-labelledby="heading-4" data-parent="#accordion-2"
                                                         style="">
                                                        <div class="card-body">
                                                            <div class="card">
                                                                <div class="card-body">

                                                                    <div class="table-responsive">
                                                                        <table class="table">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>عنوان</th>

                                                                                <th>وضعیت</th>
                                                                                <th>اقدامات</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>


                                                                            @foreach($item->pricing_items as $i)

                                                                                <tr>
                                                                                    <td class="font-weight-bold"
                                                                                        style="width: 70%">
                                                                                        {{$i->title}}
                                                                                    </td>

                                                                                    <td>
                                                                                        <label
                                                                                            class="badge badge-success badge-pill"> {{$i->publish}}</label>
                                                                                    </td>
                                                                                    <td>
                                                                                        <a href="">
                                                                                            <i class="remove fa fa-times-circle"></i>
                                                                                        </a>

                                                                                        <a href="">
                                                                                            <i class="remove fa fa-edit"></i>

                                                                                        </a>
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

                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        var todoListItem = $('.todo-list');
        var todoListInput = $('.todo-list-input');
        $('.todo-list-add-btn').on("click", function (event) {
            event.preventDefault();

            var pricing_items = $("#pricing_items option:selected").text();
            var pricing_items_id = $("#pricing_items option:selected").val();
            var item = $(this).prevAll('.todo-list-input').val();

            if (item) {
                todoListItem.append("<li><div class='form-check'>" + pricing_items + " " + item + "<i class='input-helper'></i></label></div><i class='remove fa fa-times-circle'></i></li>");
                todoListInput.val("");


            }

        });

        todoListItem.on('click', '.remove', function () {
            $(this).parent().remove();
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
