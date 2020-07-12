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
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('front/')}}/assets/img/hero/services_hero.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Our Services</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- services Area Start-->
    <div class="services-area section-padding2">
        <div class="container">
            <!-- section tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <h2>@lang('content.service_title')</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-icon">
                            <span class="flaticon-checklist"></span>
                        </div>
                        <div class="services-caption">
                            <h4>@lang('content.bsn_our_services_title')</h4>
                            <p>@lang('content.bsn_our_services_content')</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-icon">
                            <span class="flaticon-audit"></span>
                        </div>
                        <div class="services-caption">
                            <h4>@lang('content.bsn_our_services_title_2')</h4>
                            <p>@lang('content.bsn_services_content_2')</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-icon">
                            <span class="flaticon-checklist-1"></span>
                        </div>
                        <div class="services-caption">
                            <h4>@lang('content.bsn_our_services_title_3')</h4>
                            <p>@lang('content.bsn_services_content_3')</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-icon">
                            <span class="flaticon-checklist"></span>
                        </div>
                        <div class="services-caption">
                            <h4>@lang('content.bsn_our_services_title_5')</h4>
                            <p>@lang('content.bsn_our_services_content5')</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-icon">
                            <span class="flaticon-audit"></span>
                        </div>
                        <div class="services-caption">
                            <h4>@lang('content.bsn_our_services_title_6')</h4>
                            <p>@lang('content.bsn_services_content6')</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-icon">
                            <span class="flaticon-checklist-1"></span>
                        </div>
                        <div class="services-caption">
                            <h4>@lang('content.bsn_our_services_title_7')</h4>
                            <p>@lang('content.bsn_services_content7')</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- services Area End-->

    <!-- Recent Area Start -->
    <div class="recent-area section-paddingt2">
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
                            <h4><a href="{{asset('front/')}}/#">Construction industry as their over draft</a></h4>
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
                            <h4><a href="{{asset('front/')}}/#">Construction industry as their over draft</a></h4>
                            <p>Nov 30, 2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Recent Area End-->

@endsection
