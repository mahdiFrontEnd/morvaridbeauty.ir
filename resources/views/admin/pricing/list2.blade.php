@extends('layouts.admin.app')

@section('head')
    <title> Blog</title>

    @parent
    <link href="{{url('ckeditor/plugins/codesnippet/lib/highlight/styles/googlecode.css')}}" rel="stylesheet">
    <script src="{{url("ckeditor/ckeditor.js")}}"></script>
    <script src="{{url("ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js")}}"></script>

@endsection
@section("content")

    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"> قیمت ها</h4>
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <ul class="nav nav-pills nav-pills-custom" id="pills-tab-custom" role="tablist">


                            @foreach($data as   $index =>  $product)
                                <li class="nav-item">
                                    <a class="nav-link @if($index==0)   active @endif " id="_tab_{{$product->id}}"
                                       data-toggle="pill"
                                       href="#tab_{{$product->id}}" role="tab" aria-controls="pills-home"
                                       aria-selected="true">
                                        {{$product->title}}
                                    </a>
                                </li>
                                <?php  $active= ($index == 0) ? " show active ":'' ;

                                $html .= '<div class="tab-pane fade      ' . $active . '" id = "tab_' . $product->id . '"  role = "tabpanel"  aria-labelledby = "_tab_' . $product->id . '" >
                                   <div class="row">
                                     <div class="row pricing-table">';
                                foreach ($product->pricing as $p) {
                                    $html .= '<div class="col-md-4 grid-margin stretch-card pricing-card">
                                <div class="card border border-success pricing-card-body">
                                    <div class="text-center pricing-card-head">
                                        <h3 class="text-success text-center"> ' . $p->title . '</h3>
                                        <p class="mt-3"></p>
                                        <h1 class="font-weight-normal mb-4"></h1>
                                    </div>
                                    <ul class="list-unstyled plan-features">';

                                    foreach ($p->pricing_items as $item) {
                                        if (isset($item->pivot->value)) {
                                            $html .= '<li>' . $item->title . " " . $item->pivot->value . '</li>';
                                        }
                                    }
                                    $html .= '</ul>   </div>  </div>';

                                }
                                $html .= "  </div> </div> </div>";
                                ?>
                            @endforeach

                        </ul>

                        <div class="tab-content tab-content-custom-pill" id="pills-tabContent-custom">
                            {!! $html !!}
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
