@extends('back.layouts.master');
@section('title','Multilanguage Edit')
@section('content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
  </div>
  <div class="card-body">
      @if($errors->any())
      <div class='alert alert-danger'>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </div>
      @endif
      <form method="post" action="{{route('admin.language.update',$lang->id)}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
          <div class="form-group">
              <label>IdString</label>
              <input type="text" name="isstring" class="form-control" value="{{$lang->idstring}}" required></input>
          </div>
          <div class="form-group">
              <label>ContentTR</label>
              <input type="text" name="TR" class="form-control" value="{{$lang->ContentTR}}" required></input>
          </div>
          <div class="form-group">
              <label>ContentUSA</label>
              <input type="text" name="EN" class="form-control"  value="{{$lang->ContentUSA}}" required></input>
          </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Language Guncelle</button>
        </div>
      </form>
  </div>
</div>

@endsection
@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
<script>
$(document).ready(function() {
  $('#editor').summernote(
    {'height':300}
  );
});
</script>
@endsection
