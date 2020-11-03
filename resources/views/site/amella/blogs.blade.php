@extends('layouts.site.amella.app')

@section('head')
    <title>HOME</title>

    @parent
@endsection
@section("content")






    <section class="section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2><span>Latest news</span></h2>
                        <p>Our product is fully personalized and well balanced for all age of customers or adults. We
                            maintain the standards by lorem ipsum and certified by dolor set amet.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">

                    @foreach($blogs as $blog)
                        <div class="news-block">
                            <div class="news-thumb">
                                <img src="{{$blog->image_path}}" alt="">
                                <div class="overlay">
                                    <a href="/blog/{{$blog->slug}}"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="news-bottom">
                                <ul class="post-meta list-inline">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-user"></i> admin</a></li>
                                    <li class="list-inline-item"><i class="fa fa-calendar"></i> 20 Oct, 2018</li>
                                    <li class="list-inline-item"><i class="fa fa-eye"></i> 10</li>
                                </ul>
                                <h3><a href="/blog/{{$blog->slug}}"> {{$blog->title}}</a></h3>

                                <p>{{$blog->abstract}}</p>
                                <a href="/blog/{{$blog->slug}}" class="btn btn-link">ادامه<i  class="fa fa-angle-double-left"></i></a>
                            </div>
                        </div>
                    @endforeach

                    <div class="pagination-container">

                        {{$blogs->appends($_GET)->links()}}

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="sidebar-item">
                            <form method="post" action="#">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter keyword..."
                                           name="search">
                                    <span class="input-group-addon"><button type="submit"><i
                                                class="fa fa-search"></i></button></span>
                                </div>
                            </form>
                        </div>
                        <!--end sidebar-item-->

                        <div class="sidebar-item sidebar-widget">
                            <h3>Categories</h3>
                            <ul class="category-list">
                                <li><a href="#">Herbal Spa</a></li>
                                <li><a href="#">Stone Message</a></li>
                                <li><a href="#">Body Message</a></li>
                                <li><a href="#">Aromatherapy</a></li>
                            </ul>
                        </div>
                        <!--end sidebar-item-->

                        <div class="sidebar-item sidebar-widget">
                            <h3>Archive</h3>
                            <ul class="archive-list">
                                <li><a href="#">October 2018</a></li>
                                <li><a href="#">May 2018</a></li>
                                <li><a href="#">April 2018</a></li>
                                <li><a href="#">March 2018</a></li>
                                <li><a href="#">February 2018</a></li>
                                <li><a href="#">January 2018</a></li>
                            </ul>
                        </div>
                        <!--end sidebar-item-->

                        <div class="sidebar-item sidebar-widget">
                            <h3>Tag Cloudes</h3>
                            <ul class="tag-list">
                                <li><a href="#">spa</a></li>
                                <li><a href="#">wellness center</a></li>
                                <li><a href="#">beauty parlour</a></li>
                                <li><a href="#">beauty care</a></li>
                                <li><a href="#">massage</a></li>
                                <li><a href="#">salon</a></li>
                                <li><a href="#">skin care</a></li>
                            </ul>
                        </div><!--end sidebar-item-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end news -->



@endsection

@section('js')
    @parent
@endsection
