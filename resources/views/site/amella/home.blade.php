@extends('layouts.site.amella.app')

@section('head')
    <title>Clinic QODS</title>


    @parent
@endsection
@section("content")



    <section class="carousel slide" id="banner" data-ride="carousel" data-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image:url('/templates/amella/img/banner/slide-1.png')">
                <div class="banner-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="hero-text">
                                    <h6 class="animated fadeInDown">Consetetur Adipiscing</h6>
                                    <h1 class="animated fadeInUp">Soft & Pure Spa Salon</h1>
                                    <p class="animated fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt ullamcorper magna, in tincidunt ex auctor et.</p>
                                    <a href="/templates/amella/contact-us.html" class="btn btn-primary animated fadeInUp">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item" style="background-image:url('/templates/amella/img/banner/slide-2.png')">
                <div class="banner-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="hero-text">
                                    <h6 class="animated fadeInLeft">Consetetur Adipiscing</h6>
                                    <h1 class="animated fadeInLeft">Soft & Pure Spa Salon</h1>
                                    <p class="animated fadeInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt ullamcorper magna, in tincidunt ex auctor et.</p>
                                    <a href="/templates/amella/contact-us.html" class="btn btn-primary animated fadeInLeft">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item" style="background-image:url('/templates/amella/img/banner/slide-3.png')">
                <div class="banner-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="hero-text">
                                    <h6 class="animated fadeInRight">Consetetur Adipiscing</h6>
                                    <h1 class="animated fadeInRight">Soft & Pure Spa Salon</h1>
                                    <p class="animated fadeInRight">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt ullamcorper magna, in tincidunt ex auctor et.</p>
                                    <a href="/templates/amella/contact-us.html" class="btn btn-primary animated fadeInRight">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <ol class="carousel-indicators">
                <li data-target="#banner" data-slide-to="0" class="active"></li>
                <li data-target="#banner" data-slide-to="1"></li>
                <li data-target="#banner" data-slide-to="2"></li>
            </ol>
        </div>
    </section>
    <!-- end banner -->

    <section class="section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2><span>  سرویس</span></h2>
                        <p>Our product is fully personalized and well balanced for all age of customers or adults. We maintain the standards by lorem ipsum and certified by dolor set amet.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-item wow fadeIn">
                        <div class="thumb">
                            <a href="/templates/amella/service-single.html"><img src="/templates/amella/img/services/1.jpg" alt=""></a>
                        </div>
                        <div class="service-info text-center">
                            <h3><a href="/templates/amella/service-single.html">Herbal Spa</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                            <a href="/templates/amella/service-single.html" class="btn btn-default">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-item wow fadeIn">
                        <div class="thumb">
                            <a href="/templates/amella/service-single.html"><img src="/templates/amella/img/services/2.jpg" alt=""></a>
                        </div>
                        <div class="service-info text-center">
                            <h3><a href="/templates/amella/service-single.html">Stone Message</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                            <a href="/templates/amella/service-single.html" class="btn btn-default">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-item wow fadeIn">
                        <div class="thumb">
                            <a href="/templates/amella/service-single.html"><img src="/templates/amella/img/services/3.jpg" alt=""></a>
                        </div>
                        <div class="service-info text-center">
                            <h3><a href="/templates/amella/service-single.html">Body Message</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                            <a href="/templates/amella/service-single.html" class="btn btn-default">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="/templates/amella/services.html" class="btn btn-primary">All Services</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end services -->

    <section class="section-spacing inverse-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="img-block wow fadeIn">
                        <img src="/templates/amella/img/why-choose/1.jpg" alt="">
                        <div class="play-button">
                            <a href="/templates/amella/#" data-toggle="modal" data-target="#video-modal"><i class="fa fa-play"></i></a>
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
                            <a href="/templates/amella/contact-us.html" class="btn btn-default">Contact Us</a>
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
                            <a href="/templates/amella/contact-us.html" class="btn btn-default">Contact Us</a>
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
                            <a href="/templates/amella/contact-us.html" class="btn btn-default">Contact Us</a>
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
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2><span>Our gallery</span></h2>
                        <p>Our product is fully personalized and well balanced for all age of customers or adults. We maintain the standards by lorem ipsum and certified by dolor set amet.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="gallery-item wow fadeIn">
                        <a href="/templates/amella/img/gallery/1.jpg" class="venobox" data-gall="gallery">
                            <img src="/templates/amella/img/gallery/1.jpg" alt="">
                            <div class="gallery-caption text-center">
                                <i class="fa fa-heart-o"></i>
                                <p>127 Likes</p>
                                <h3>Skin Care</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="gallery-item wow fadeIn">
                        <a href="/templates/amella/img/gallery/2.jpg" class="venobox" data-gall="gallery">
                            <img src="/templates/amella/img/gallery/2.jpg" alt="">
                            <div class="gallery-caption text-center">
                                <i class="fa fa-heart-o"></i>
                                <p>127 Likes</p>
                                <h3>Skin Care</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="gallery-item wow fadeIn">
                        <a href="/templates/amella/img/gallery/3.jpg" class="venobox" data-gall="gallery">
                            <img src="/templates/amella/img/gallery/3.jpg" alt="">
                            <div class="gallery-caption text-center">
                                <i class="fa fa-heart-o"></i>
                                <p>127 Likes</p>
                                <h3>Skin Care</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="gallery-item wow fadeIn">
                        <a href="/templates/amella/img/gallery/4.jpg" class="venobox" data-gall="gallery">
                            <img src="/templates/amella/img/gallery/4.jpg" alt="">
                            <div class="gallery-caption text-center">
                                <i class="fa fa-heart-o"></i>
                                <p>127 Likes</p>
                                <h3>Body Message</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="gallery-item wow fadeIn">
                        <a href="/templates/amella/img/gallery/5.jpg" class="venobox" data-gall="gallery">
                            <img src="/templates/amella/img/gallery/5.jpg" alt="">
                            <div class="gallery-caption text-center">
                                <i class="fa fa-heart-o"></i>
                                <p>127 Likes</p>
                                <h3>Body Message</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="gallery-item wow fadeIn">
                        <a href="/templates/amella/img/gallery/6.jpg" class="venobox" data-gall="gallery">
                            <img src="/templates/amella/img/gallery/6.jpg" alt="">
                            <div class="gallery-caption text-center">
                                <i class="fa fa-heart-o"></i>
                                <p>127 Likes</p>
                                <h3>Body Message</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end gallery -->

    <section class="section-spacing">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="appoinment-text wow fadeIn">
                        <h2>Make an Appointment?</h2>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos, In massa urna pellentesque habitant morbi tristique senectus.</p>
                        <p>Call us : 002-6666-8888 or fill out our online booking & equiry form and we’ll contact you.</p>
                        <a href="/templates/amella/#" data-toggle="modal" data-target="#appointment" class="btn btn-primary">Make Appointment</a>
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

    <section class="section-spacing inverse-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2><span>Meet Our Experts</span></h2>
                        <p>Our product is fully personalized and well balanced for all age of customers or adults. We maintain the standards by lorem ipsum and certified by dolor set amet.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="team wow fadeIn">
                        <div class="thumb">
                            <img src="/templates/amella/img/team/1.jpg" alt="">
                        </div>
                        <div class="team-info text-center">
                            <h3>Tasfia</h3>
                            <h6>Hair Expert</h6>
                        </div>
                        <div class="team-overlay text-center">
                            <h3>Tasfia</h3>
                            <h6>Hair Expert</h6>
                            <ul class="social-icons">
                                <li><a href="/templates/amella/#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="/templates/amella/#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="/templates/amella/#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="/templates/amella/#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="team wow fadeIn">
                        <div class="thumb">
                            <img src="/templates/amella/img/team/2.jpg" alt="">
                        </div>
                        <div class="team-info text-center">
                            <h3>Salina Gomej</h3>
                            <h6>Message Expert</h6>
                        </div>
                        <div class="team-overlay text-center">
                            <h3>Salina Gomej</h3>
                            <h6>Message Expert</h6>
                            <ul class="social-icons">
                                <li><a href="/templates/amella/#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="/templates/amella/#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="/templates/amella/#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="/templates/amella/#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="team wow fadeIn">
                        <div class="thumb">
                            <img src="/templates/amella/img/team/3.jpg" alt="">
                        </div>
                        <div class="team-info text-center">
                            <h3>Julia Shorez</h3>
                            <h6>Skin Therapist</h6>
                        </div>
                        <div class="team-overlay text-center">
                            <h3>Julia Shorez</h3>
                            <h6>Skin Therapist</h6>
                            <ul class="social-icons">
                                <li><a href="/templates/amella/#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="/templates/amella/#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="/templates/amella/#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="/templates/amella/#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="team wow fadeIn">
                        <div class="thumb">
                            <img src="/templates/amella/img/team/4.jpg" alt="">
                        </div>
                        <div class="team-info text-center">
                            <h3>Sharmin Akter</h3>
                            <h6>Therapy Expert</h6>
                        </div>
                        <div class="team-overlay text-center">
                            <h3>Sharmin Akter</h3>
                            <h6>Therapy Expert</h6>
                            <ul class="social-icons">
                                <li><a href="/templates/amella/#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="/templates/amella/#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="/templates/amella/#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="/templates/amella/#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="/templates/amella/team.html" class="btn btn-primary">View Our Experts</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end team member -->

    <section class="section-spacing">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="fun-fact-img wow fadeIn">
                        <img class="tilt-img" src="/templates/amella/img/fun-facts/1.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                            <div class="features-info">
                                <span class="counter">800</span>
                                <h3>Clients</h3>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                            <div class="features-info">
                                <span class="counter">50</span>
                                <h3>Therapists</h3>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                            <div class="features-info">
                                <span class="counter">35</span>
                                <h3>Procedures</h3>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                            <div class="features-info">
                                <span class="counter">890</span>
                                <h3>Treatments</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end fun facts -->

    <section class="section-spacing inverse-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2><span>Happy Clients</span></h2>
                        <p>Our product is fully personalized and well balanced for all age of customers or adults. We maintain the standards by lorem ipsum and certified by dolor set amet.</p>
                    </div>
                </div>
            </div>

            <div class="owl-carousel testimonial-carousel" style="direction: ltr">
                <div class="testimonial-list">
                    <div class="author-comment">
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                        </div>
                        <p>Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with ‘real’ content. This is required when, for example, the final text is not yet available.</p>
                    </div>
                    <div class="author-info">
                        <div class="author_thumb">
                            <img src="/templates/amella/img/testimonials/1.png" alt="">
                        </div>
                        <div class="author-meta">
                            <span class="author-name">David Warner</span>
                            <span class="designation"><em>Envato Customer</em></span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-list">
                    <div class="author-comment">
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                        </div>
                        <p>Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with ‘real’ content. This is required when, for example, the final text is not yet available.</p>
                    </div>
                    <div class="author-info">
                        <div class="author_thumb">
                            <img src="/templates/amella/img/testimonials/2.png" alt="">
                        </div>
                        <div class="author-meta">
                            <span class="author-name">Alex Smith</span>
                            <span class="designation"><em>Envato Customer</em></span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-list">
                    <div class="author-comment">
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                        </div>
                        <p>Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with ‘real’ content. This is required when, for example, the final text is not yet available.</p>
                    </div>
                    <div class="author-info">
                        <div class="author_thumb">
                            <img src="/templates/amella/img/testimonials/3.png" alt="">
                        </div>
                        <div class="author-meta">
                            <span class="author-name">David Warner</span>
                            <span class="designation"><em>Envato Customer</em></span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-list">
                    <div class="author-comment">
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                        </div>
                        <p>Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with ‘real’ content. This is required when, for example, the final text is not yet available.</p>
                    </div>
                    <div class="author-info">
                        <div class="author_thumb">
                            <img src="/templates/amella/img/testimonials/1.png" alt="">
                        </div>
                        <div class="author-meta">
                            <span class="author-name">Alex Smith</span>
                            <span class="designation"><em>Envato Customer</em></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end team testimonials -->

@endsection

@section('js')
    @parent
@endsection
