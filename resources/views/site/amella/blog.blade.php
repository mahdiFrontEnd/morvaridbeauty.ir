@extends('layouts.site.amella.app')

@section('head')
    <title>HOME</title>

    @parent
@endsection
@section("content")


    <section class="section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="news-details">
                        <div class="post-thumb">
                            <img src="{{$blog->image_path}}"  width="100%" alt="">
                        </div>
                        <ul class="post-meta list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-user"></i> admin</a></li>
                            <li class="list-inline-item"><i class="fa fa-calendar"></i> 20 Oct, 2018</li>
                            <li class="list-inline-item"><i class="fa fa-eye"></i> 10</li>
                        </ul>
                        <h3>{{$blog->title}}</h3>

                        <div class="content-block">
                      {!! nl2br($blog->content )!!}
                        </div>

                        <div class="comment-title">
                            <h3>Comments (3)</h3>
                        </div>
                        <ol class="comment-list">
                            <!-- comment-list    -->
                            <li class="comment">
                                <div class="comment-info">
                                    <div class="author-avatar">
                                        <img alt="author" src="/templates/amella/img/testimonials/1.png">
                                    </div>
                                    <div class="author-desc">
                                        <div class="author-title">
                                            <strong>Philip Josep</strong>
                                        </div>
                                        <p>You wanna be where everyboody knows Your name. And a we knooow Flipper lives in a world full of wonder flying there under the sea creepy and kooky</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">20 September 2018</li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-reply"></i> Reply</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <!-- comment -->

                            <li class="comment">
                                <div class="comment-info">
                                    <div class="author-avatar">
                                        <img alt="author" src="/templates/amella/img/testimonials/2.png">
                                    </div>
                                    <div class="author-desc">
                                        <div class="author-title">
                                            <strong>Philip Josep</strong>
                                        </div>
                                        <p>You wanna be where everyboody knows Your name. And a we knooow Flipper lives in a world full of wonder flying there under the sea creepy and kooky</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">20 September 2018</li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-reply"></i> Reply</a></li>
                                        </ul>

                                    </div>
                                </div>
                            </li>
                            <!-- comment -->

                            <li class="comment">
                                <div class="comment-info">
                                    <div class="author-avatar">
                                        <img alt="author" src="/templates/amella/img/testimonials/3.png">
                                    </div>
                                    <div class="author-desc">
                                        <div class="author-title">
                                            <strong>Philip Josep</strong>
                                        </div>
                                        <p>You wanna be where everyboody knows Your name. And a we knooow Flipper lives in a world full of wonder flying there under the sea creepy and kooky</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">20 September 2018</li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-reply"></i> Reply</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- .comment-info -->
                            </li>
                            <!-- .comment -->
                        </ol>

                        <div class="comment-title">
                            <h3>Leave Your Comments</h3>
                        </div>

                        <div class="comment-form">
                            <form method="post" action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="First Name" class="form-control" name="fname">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Last Name" class="form-control" name="lname">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Email Address" class="form-control" name="email">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea placeholder="Your comments" cols="20" rows="8" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <input type="submit" value="Submit" name="submit" class="btn btn-primary">

                            </form>
                        </div><!--end comment-form-->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="sidebar-item">
                            <form method="post" action="#">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter keyword..." name="search">
                                    <span class="input-group-addon"><button type="submit"><i class="fa fa-search"></i></button></span>
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
    <!-- end section -->


@endsection

@section('js')
    @parent
@endsection
