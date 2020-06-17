<?php
use Illuminate\Support\Facades\Session;
app()->setLocale(Session::get('locale'))
?>
@extends('front.layouts.master')
@section('title','Anasayfa')
@section('content')
    <div class="container">
    <div class="col-md-9 mx-auto">
        <br>

        @include('front.widgets.articleList')
    </div>
    </div>
@endsection
