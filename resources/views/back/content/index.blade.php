@extends('back.layouts.master');
@section('title','Tüm Makaleler')
@section('content')
<div class="card shadow mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Fotoğraf</th>
            <th>Widget Name</th>
            <th>Duzenle</th>
          </tr>
        </thead>
        <tbody>
          @Foreach($articles as $article)


          <tr>
            <td>
              <img src="{{asset($article->image_path)}}" class="img-thumbnail ruonded" width="200" />
            </td>
            <td>{{$article->widget_name}}</td>
              <td>   <form  method="post" action="{{route('admin.content.update')}}" enctype="multipart/form-data">  @csrf<input type="hidden" value="{{$article->id}}" name="id">  <input type="text" class="form-control" value="{{$article->title}}" name="title"><hr>    <input type="file" class="form-control" name="image"  >
              <hr>
                  <input type="submit" class="btn btn-info "> </form></td>
          </tr>

          @endforeach

        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
@section('css')
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
@section('js')
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script>
  $(function() {
    $('.switch').change(function() {
      id= $(this)[0].getAttribute('article-id');
      statu=$(this).prop('checked');
      $.get("{{route('admin.switch')}}", {id:id , statu:statu} , function(data, status){});
      })
    })
</script>
@endsection
