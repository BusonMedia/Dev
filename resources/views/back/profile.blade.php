@extends('back.layouts.master')
@section('title','Profil Ayarları')
@section('content')
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
<form  method="post" action="{{route('admin.profile.update')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Admin Name</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Title" name="name" value="{{$admin->name}}" >
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Admin Şifre</label>
            <input type="password" class="form-control" id="inputEmail5" placeholder="Yeni Şifre(min 6 character)" name="sifre" minlength="6">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Güncelle</button>
</form>
@endsection
