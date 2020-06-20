@extends('back.layouts.master')
@section('title',$article->title.' sayfasini güncelle')
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
      <form method="post" action="{{route('admin.sayfalar.update',$article->id)}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label>Sayfa Başlığı</label>
          <input type="text" name="title" class="form-control" value="{{$article->title}}" required></input>
        </div>
        <div class="form-group">
          <label>Sayfa Fotoğrafı</label><br />
          <img src="{{asset($article->image)}}" class="img-thumbnail ruonded" width="300" />
          <input type="file" name="image" class="form-control" ></input>
        </div>
        <div class="form-group">
          <label>Sayfa İçeriği</label>
          <textarea  id="editor" name="content" class="form-control" rows="4">{!!  $article->content  !!}</textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Sayfayi Güncelle</button>
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
