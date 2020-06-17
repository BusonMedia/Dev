<?php
use Illuminate\Support\Facades\Session;
app()->setLocale(Session::get('locale'))
?>
@extends('front.layouts.master')
@section('title','Anasayfa')
@section('content')
<section id="intro">

    <div class="intro-content">
        <h2>@lang('content.main_title_1') <span>@lang('content.main_title_2') </span><br>@lang('content.main_title_3')</h2>
        <div>
            <a href="#about" class="btn-get-started scrollto">@lang('content.button_1')</a>
        </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
        <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
        <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
        <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
        <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
        <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
    </div>

</section><!-- #intro -->

<main id="main">

    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="{{asset('homepage/')}}/img/about-img.jpg" alt="">
                </div>

                <div class="col-lg-6 content">
                    <h2>@lang('content.section_2_title')</h2>
                    <h3>@lang('content.section_2_define')</h3>

                    <ul>
                        <li><i class="ion-android-checkmark-circle"></i> @lang('content.li_item_1')</li>
                        <li><i class="ion-android-checkmark-circle"></i>@lang('content.li_item_2')</li>
                        <li><i class="ion-android-checkmark-circle"></i> @lang('content.li_item_3')</li>
                    </ul>

                </div>
            </div>

        </div>
    </section><!-- #about -->
    <section id="services">
        <div class="container">
            <div class="section-header">
                <h2>@lang('content.service_title')</h2>
                <p>@lang('content.service_desc')</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="box wow fadeInLeft">
                        <div class="icon"><i class="fa fa-bar-chart"></i></div>
                        <h4 class="title"><a href="{{asset('homepage/')}}/">@lang('content.tab_1_title')</a></h4>
                        <p class="description">@lang('content.tab_1_content')</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInRight">
                        <div class="icon"><i class="fa fa-picture-o"></i></div>
                        <h4 class="title"><a href="{{asset('homepage/')}}/">@lang('content.tab_2_title')</a></h4>
                        <p class="description">@lang('content.tab_2_content')</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                        <h4 class="title"><a href="{{asset('homepage/')}}/">@lang('content.tab_3_title')</a></h4>
                        <p class="description">@lang('content.tab_3_content')</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInRight" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-map"></i></div>
                        <h4 class="title"><a href="{{asset('homepage/')}}/">@lang('content.tab_4_title')</a></h4>
                        <p class="description">@lang('content.tab_4_content')</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #services -->

    <section id="clients" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>@lang('content.section_4_title')</h2>
                <p>@lang('content.section_4_content')</p>
            </div>

            <div class="owl-carousel clients-carousel">
                <img src="{{asset('homepage/')}}/img/clients/client-1.png" alt="">
                <img src="{{asset('homepage/')}}/img/clients/client-2.png" alt="">
                <img src="{{asset('homepage/')}}/img/clients/client-3.png" alt="">
                <img src="{{asset('homepage/')}}/img/clients/client-4.png" alt="">
                <img src="{{asset('homepage/')}}/img/clients/client-5.png" alt="">
                <img src="{{asset('homepage/')}}/img/clients/client-6.png" alt="">
                <img src="{{asset('homepage/')}}/img/clients/client-7.png" alt="">
                <img src="{{asset('homepage/')}}/img/clients/client-8.png" alt="">
            </div>

        </div>
    </section><!-- #clients -->

</main>

@endsection

