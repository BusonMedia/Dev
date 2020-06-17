<?php
use Illuminate\Support\Facades\Session;
app()->setLocale(Session::get('locale'))
?>
@extends('front.layouts.master')
@section('title',$page->title)
@section('content')
    <br>
    <div class="container">
<div class="col-lg-10 col-md-10 mx-auto">
    <img src="{{asset($page->image)}}" class="img-fluid" alt="Responsive image">
    <hr>
    {!! $page->content!!}
    <hr>

</div>
  </div>
      @endsection
