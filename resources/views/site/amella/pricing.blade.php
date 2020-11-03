@extends('layouts.site.amella.app')

@section('head')
    <title> قیمت گذاری ما </title>

    @parent
@endsection
@section("content")

    <section class="section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2><span>Cheapest pricing plan</span></h2>
                        <p>Our product is fully personalized and well balanced for all age of customers or adults. We maintain the standards by lorem ipsum and certified by dolor set amet.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="pricing-table wow fadeIn">
                        <div class="thumb">
                            <img src="/templates/amella/img/pricing/1.jpg" alt="">
                        </div>
                        <div class="pricing-info text-center">
                            <h3>Basic</h3>
                            <ul>
                                <li>Nail Cutting</li>
                                <li>Hair Coloring</li>
                                <li>Spa Therapy</li>
                                <li>Body massage</li>
                                <li>Manicure</li>
                            </ul>
                            <h2><sub>$</sub>29.00</h2>
                            <a href="contact-us.html" class="btn btn-default">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-table wow fadeIn">
                        <div class="thumb">
                            <img src="/templates/amella/img/pricing/2.jpg" alt="">
                        </div>
                        <div class="pricing-info text-center">
                            <h3>Medium</h3>
                            <ul>
                                <li>Nail Cutting</li>
                                <li>Hair Coloring</li>
                                <li>Spa Therapy</li>
                                <li>Body massage</li>
                                <li>Manicure</li>
                            </ul>
                            <h2><sub>$</sub>39.00</h2>
                            <a href="contact-us.html" class="btn btn-default">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-table wow fadeIn">
                        <div class="thumb">
                            <img src="/templates/amella/img/pricing/3.jpg" alt="">
                        </div>
                        <div class="pricing-info text-center">
                            <h3>Ultimate</h3>
                            <ul>
                                <li>Nail Cutting</li>
                                <li>Hair Coloring</li>
                                <li>Spa Therapy</li>
                                <li>Body massage</li>
                                <li>Manicure</li>
                            </ul>
                            <h2><sub>$</sub>49.00</h2>
                            <a href="contact-us.html" class="btn btn-default">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end pricing -->

    <section class="section-spacing inverse-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="img-block wow fadeIn">
                        <img src="/templates/amella/img/why-choose/1.jpg" alt="">
                        <div class="play-button">
                            <a href="#" data-toggle="modal" data-target="#video-modal"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="text-block wow fadeIn">
                        <h2>Why Choose us?</h2>
                        <p>Our product is fully personalized and well balanced for all age of customers or adults. We maintain the standards by lorem ipsum and certified by dolor set amet.</p>
                        <ul>
                            <li>Created from natural herbs</li>
                            <li>100% safe for your skin</li>
                            <li>Unique from other spa treatments</li>
                            <li>Created by medical professionals of spa lab</li>
                            <li>Special gifts & offers for you</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end why choose -->

    <section class="section-spacing">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="appoinment-text wow fadeIn">
                        <h2>Make an Appointment?</h2>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos, In massa urna pellentesque habitant morbi tristique senectus.</p>
                        <p>Call us : 002-6666-8888 or fill out our online booking & equiry form and we’ll contact you.</p>
                        <a href="#" data-toggle="modal" data-target="#appointment" class="btn btn-primary">Make Appointment</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="appoinment-img text-md-right text-center wow fadeIn">
                        <img class="tilt-img" src="/templates/amella/img/appointment/1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end appointment -->


@endsection

@section('js')
    @parent


@endsection
