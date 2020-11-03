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




    <div class="card">
        <div class="card-body">
            <h4 class="card-title">لیست قیمت ها</h4>


            <div class="row">
                <div class="col-12">

                    <div class="row pricing-table">
                        @foreach($data as $item)

                            <div class="col-md-4 grid-margin stretch-card pricing-card">
                                <div class="card border border-success pricing-card-body">
                                    <div class="text-center pricing-card-head">
                                        <h3 class="text-success text-center">  {{$item->title}}</h3>
                                        <p class="mt-3">{{$item->description}}</p>
                                        <h1 class="font-weight-normal mb-4">{{$item->price}}</h1>
                                    </div>
                                    <ul class="list-unstyled plan-features">

                                        @foreach($item->pricing as $ii)

                                            @foreach($ii->pricing_items as $items)
                                                @if(isset($items->pivot->value))

                                                    <li>{{$items->title." ".$items->pivot->value}}</li>
                                                @endif
                                            @endforeach

                                        @endforeach
                                    </ul>

                                </div>
                            </div>
                        @endforeach

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
