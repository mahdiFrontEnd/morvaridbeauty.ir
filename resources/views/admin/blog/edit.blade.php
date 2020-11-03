@extends('layouts.admin.app')

@section('head')
    <title>edit Blog</title>
    <script src="{{url("ckeditor/ckeditor.js")}}"></script>

    @parent
@endsection
@section("content")
    <br/>
    <br/>
    <br/>
    <br/>
    <form method="POST" action="{{url("")}}">
        <textarea  name="editor1" id="editor1" rows="10" cols="80"></textarea>
        <script>
            CKEDITOR.replace( 'editor1' ,{
                extraPlugins: 'codesnippet'

            });
        </script>
    </form>
@endsection

@section('js')
    @parent
@endsection
