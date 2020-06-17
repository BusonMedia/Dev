<?php
use Illuminate\Support\Facades\Session;
app()->setLocale(Session::get('locale'))
?>
@extends('front.layouts.master')
@section('title',$article->title)

@section('content')

    <br>
    <div class="container">
      <div class="col-md-9 mx-auto">
          <img src="{{asset($article->image)}}" class="img-fluid" alt="Responsive image">
<hr>
          {!!$article->content!!}
        <br/><br/>
        <span class = "text-danger"> Okunma Sayısı : <b>{{$article->hit}}</b></span>

      </div>
      </div>
      @endsection

