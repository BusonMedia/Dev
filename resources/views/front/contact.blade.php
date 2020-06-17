<?php
use Illuminate\Support\Facades\Session;
app()->setLocale(Session::get('locale'))
?>
@extends('front.layouts.master')
@section('title','İletişim')
@section('bg','https://www.projexme.com/wp-content/uploads/2017/03/Projecx-Contact-Page-1.jpg')
@section('content')
    <br>
    <div class="container">
        <div class="col-lg-10 col-md-10 mx-auto">
            <img src="https://aylinsanatsatranc.com/wp-content/uploads/2019/09/2-2.jpg" class="img-fluid" alt="Responsive image">
            <hr>
        </div>
        <div class="col-lg-10 col-md-10 mx-auto">
@if(session('success'))
  <div class="alert alert-success">
    {{session('success')}}
  </div>
  @endif
  @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <p>Bizimle İletişime Geçebilirsiniz...</p>
<form method="post" action="{{route('contact.post')}}" >
    @csrf
    <div class="control-group">
      <div class="form-group controls">
        <label>Ad Soyad</label>
        <input type="text" class="form-control" value="{{old('name')}}" placeholder="Adınız Soyadınız" name="name" required >
        <p class="help-block text-danger"></p>
      </div>
    </div>
    <div class="control-group">
      <div class="form-group controls">
        <label>E-mail</label>
        <input type="email" class="form-control" value="{{old('email')}}" placeholder="Email Adresiniz" name="email" required >
        <p class="help-block text-danger"></p>
      </div>
    </div>
    <div class="control-group">
      <div class="form-group col-xs-12 controls">
        <label>Konu</label>
        <select class="form-control" name="topic">
          <option @if(old('topic')=="Bilgi") selected @endif >Bilgi</option>
          <option @if(old('topic')=="Destek") selected @endif >Destek</option>
          <option @if(old('topic')=="Genel") selected @endif >Genel</option>
        </select>
      </div>
    </div>
    <div class="control-group">
      <div class="form-group controls">
        <label>Mesaj</label>
        <textarea rows="5"  name="message" class="form-control" placeholder="Mesajınız">{{old('message')}}</textarea>
        <p class="help-block text-danger"></p>
      </div>
    </div>
    <br>
    <div id="success"></div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary" id="sendMessageButton">Gönder</button>
    </div>
  </form>
</div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

</div>

      @endsection
