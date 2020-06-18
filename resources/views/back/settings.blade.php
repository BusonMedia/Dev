@extends('back.layouts.master')
@section('title','Site Ayarları')
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
<form  method="post" action="{{route('admin.settings.update')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Site Başlık</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Title" name="title" value="{{$setting[0]->title}}" >
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Açıklama</label>
            <input type="text" class="form-control" id="inputEmail5" placeholder="Description" name="description" value="{{$setting[0]->description}}" >
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Icon</label>
        <input type="file" class="form-control" name="image" id="inputAddress" >
    </div>
    <div class="form-group">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitch1" name="status" @if($setting[0]->status==1)checked @endif>
            <label class="custom-control-label" for="customSwitch1">Website Aktif</label>
        </div>
    </div>
    <div class="form-group">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitch2" name="blog"  @if($setting[0]->blog_status==1)checked @endif>
            <label class="custom-control-label" for="customSwitch2">Blog Aktif</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Güncelle</button>
</form>
@endsection
