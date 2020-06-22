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
            <!--    <p>@lang('content.service_desc')</p>-->
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="box wow fadeInLeft">
                        <div class="icon"><i class="fa fa-code"></i></div>
                        <h4 class="title"><a href="{{asset('homepage/')}}/">@lang('content.tab_1_title')</a></h4>
                        <p class="description">@lang('content.tab_1_content')</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInRight">
                        <div class="icon"><i class="fa fa-mobile"></i></div>
                        <h4 class="title"><a href="{{asset('homepage/')}}/">@lang('content.tab_2_title')</a></h4>
                        <p class="description">@lang('content.tab_2_content')</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-shopping-cart"></i></div>
                        <h4 class="title"><a href="{{asset('homepage/')}}/">@lang('content.tab_3_title')</a></h4>
                        <p class="description">@lang('content.tab_3_content')</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box wow fadeInRight" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-binoculars"></i></div>
                        <h4 class="title"><a href="{{asset('homepage/')}}/">@lang('content.tab_4_title')</a></h4>
                        <p class="description">@lang('content.tab_4_content')</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #services -->
    @if(count($widgetManangment)>0)
    <section id="portfolio" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>@lang('content.portfolio_title')</h2>
                <p>@lang('content.portfolio_content')</p>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row no-gutters">
                @foreach($widgetManangment as $image)
                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="{{asset($image->image_path)}}" class="portfolio-popup">
                            <img src="{{asset($image->image_path)}}" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><h2 class="wow fadeInUp">{{$image->title}}</h2></div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach


            </div>

        </div>
    </section><!-- #portfolio -->
    @endif

    @if(count($widgetManangment2)>0)

    <section id="clients" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>@lang('content.section_4_title')</h2>
                <p>@lang('content.section_4_content')</p>
            </div>

            <div class="owl-carousel clients-carousel">
                @foreach($widgetManangment2 as $image)
                <img src="{{asset($image->image_path)}}" alt="">
                @endforeach

            </div>

        </div>
    </section><!-- #clients -->
    @endif


    <section id="call-to-action" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 text-center text-lg-left">
                    <h3 class="cta-title">@lang('content.demad.title')</h3>
                    <p class="cta-text"> @lang('content.demad.content')</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" data-toggle="modal" data-target="#exampleModal">@lang('content.demad.btn')</a>
                </div>
            </div>

        </div>
    </section><!-- #call-to-action -->

</main>
@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form  method="post" action="{{route('demand.post')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="text" class="form-control" placeholder="Ad Soyad" name="name" required>
                    <hr>
                    <input type="tel" class="form-control" placeholder="Telefon Numarası" name="phone" required>
                    <hr>
                    <input type="email" class="form-control" placeholder="E mail" name="email" required >
                    <hr>
                    <label>Konu</label>
                    <select class="form-control" name="product">
                        <option @if(old('topic')=="Kurumsal Web Sitesi") selected @endif >Kurumsal Web Sitesi</option>
                        <option @if(old('topic')=="E-Ticaret") selected @endif >E-Ticaret</option>
                        <option @if(old('topic')=="Youtube Modulu") selected @endif >Youtube Modulu</option>
                        <option @if(old('topic')=="Tanitim Web Sitesi") selected @endif >Tanitim Web Sitesi</option>
                        <option @if(old('topic')=="Diğer") selected @endif >Diğer</option>
                    </select>
                    <hr>
                    <label>Mesaj</label>
                    <textarea rows="5"  name="message" class="form-control" placeholder="Mesajınız">{{old('message')}}</textarea>
                    <br/>
                    <input type="submit" class="btn btn-primary btn-lg btn-block"  value="Save Changes" >
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>


@endsection
@section('js')
    <script>
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script>
@endsection
