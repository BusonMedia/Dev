<?php
use Illuminate\Support\Facades\Session;
app()->setLocale(Session::get('locale'))
?>
@extends('front.layouts.master')
@section('title','Anasayfa')
@section('content')

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('front/')}}/assets/img/hero/contact_hero.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>About</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- We Trusted Start-->
    <div class="we-trusted-area trusted-padding">
        <div class="container">
            <div class="row d-flex align-items-end">
                <div class="col-xl-7 col-lg-7">
                    <div class="trusted-img">
                        <img src="{{asset('front/')}}/assets/img/team/wetrusted.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="trusted-caption">
                        <h2>We are more trusted then 5000 clients</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru  dolor sit amet, consectetur adipn.</p>
                        <a href="{{asset('front/')}}/#" class="btn trusted-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- We Trusted End-->

    <!-- Team-profile Start -->
    <div class="team-profile team-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-profile mb-30">
                        <!-- Front -->
                        <div class="single-profile-front">
                            <div class="profile-img">
                                <img src="{{asset('front/')}}/assets/img/team/team_1.jpg" alt="">
                            </div>
                            <div class="profile-caption">
                                <h4><a href="{{asset('front/')}}/#">Business Planning</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-profile mb-30">
                        <!-- Front -->
                        <div class="single-profile-front">
                            <div class="profile-img">
                                <img src="{{asset('front/')}}/assets/img/team/team_2.jpg" alt="">
                            </div>
                            <div class="profile-caption">
                                <h4><a href="{{asset('front/')}}/#">Financial Projections</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-profile mb-30">
                        <!-- Back -->
                        <div class="single-profile-back-last">
                            <h2>What we do for you</h2>
                            <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore smod tem magna aliqua. Ut enim.</p>
                            <a href="{{asset('front/')}}/#">View profile »</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team-profile End-->

    <!-- Testimonial Start -->
    <div class="testimonial-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-9 col-md-9">
                    <div class="h1-testimonial-active">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial pt-65">
                            <!-- Testimonial tittle -->
                            <div class="testimonial-icon mb-45">
                                <img src="{{asset('front/')}}/assets/img/logo/testimonial.png" class="ani-btn " alt="">
                            </div>
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption text-center">
                                <p>You can’t succeed if you just do what others do and
                                    follow the well-worn path. You need to create a new and
                                    original path for yourself. </p>
                                <!-- Rattion -->
                                <div class="testimonial-ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="rattiong-caption">
                                    <span>Clifford Frazier<span> - Colorlib Themes</span> </span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial pt-65">
                            <!-- Testimonial tittle -->
                            <div class="testimonial-icon mb-45">
                                <img src="{{asset('front/')}}/assets/img/logo/testimonial.png"  class="ani-btn" alt="">
                            </div>
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption text-center">
                                <p>You can’t succeed if you just do what others do and
                                    follow the well-worn path. You need to create a new and
                                    original path for yourself. </p>
                                <!-- Rattion -->
                                <div class="testimonial-ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="rattiong-caption">
                                    <span>Clifford Frazier<span> - Colorlib Themes</span> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Recent Area Start -->
    <div class="recent-area section-paddingt">
        <div class="container">
            <!-- section tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <h2>Our Recent News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-recent-cap mb-30">
                        <div class="recent-img">
                            <img src="{{asset('front/')}}/assets/img/recent/rcent_1.png" alt="">
                        </div>
                        <div class="recent-cap">
                            <span>Business planing</span>
                            <h4><a href="{{asset('front/')}}/#">Amazing Places To Visit In Summer</a></h4>
                            <p>Nov 30, 2020</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-recent-cap mb-30">
                        <div class="recent-img">
                            <img src="{{asset('front/')}}/assets/img/recent/rcent_2.png" alt="">
                        </div>
                        <div class="recent-cap">
                            <span>Audit</span>
                            <h4><a href="{{asset('front/')}}/single-blog.html">Amazing Places To Visit In Summer</a></h4>
                            <p>Nov 30, 2020</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-recent-cap mb-30">
                        <div class="recent-img">
                            <img src="{{asset('front/')}}/assets/img/recent/rcent_3.png" alt="">
                        </div>
                        <div class="recent-cap">
                            <span>Business planing</span>
                            <h4><a href="{{asset('front/')}}/single-blog.html">Amazing Places To Visit In Summer</a></h4>
                            <p>Nov 30, 2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Recent Area End-->

    <!-- Request Back Start -->
    <div class="request-back-area section-padding30">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-4 col-lg-5 col-md-5">
                    <div class="request-content">
                        <h3>Request for  Call Back</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore,</p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7">
                    <!-- Contact form Start -->
                    <div class="form-wrapper">
                        <form id="contact-form" action="#" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box  mb-30">
                                        <input type="text" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box mb-30">
                                        <input type="text" name="email" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 mb-30">
                                    <div class="select-itms">
                                        <select name="select" id="select1">
                                            <option value="">Services</option>
                                            <option value="">Services-1</option>
                                            <option value="">Services-2</option>
                                            <option value="">Services-3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <button type="submit" class="send-btn">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>     <!-- Contact form End -->
            </div>
        </div>
    </div>
    <!-- Request Back End -->

@endsection
