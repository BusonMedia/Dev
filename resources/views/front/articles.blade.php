<?php
use Illuminate\Support\Facades\Session;
app()->setLocale(Session::get('locale'))
?>
@extends('front.layouts.master')
<!-- Main Content -->
@section('title','Anasayfa')
@section('content')
    @include('front.Widgets.articleWidget')

    @include('front.Widgets.categoryWidget')
@endsection

