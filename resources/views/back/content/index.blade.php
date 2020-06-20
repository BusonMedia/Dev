@extends('back.layouts.master');
@section('title','İçerik Yönetimi')
@section('content')
<div class="card shadow mb-4">

  <div class="card-body">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Yeni Icerik Ekle
      </button> <hr>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Fotoğraf</th>
            <th>Widget Name</th>
            <th>İçerik Aktif</th>
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
              <td>
                  <input class="switch" page-id="{{$article->id}}" type="checkbox" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger" @if($article->status==1) checked @endif data-toggle="toggle">
              </td>
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


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form  method="post" action="{{route('admin.content.store')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="text" class="form-control" placeholder="Title" name="title" required>
                    <hr>
                    <input type="file" class="form-control" name="image" required >
                    <hr>
                    <label for="exampleFormControlSelect1"> Widget Seciniz</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="widget" required>

                        @foreach($select as $widget)
                        <option>{{$widget->widget_name}}</option>
                        @endforeach
                    </select>
                    <br>
                    <input type="submit" class="btn btn-primary btn-lg btn-block"  value="Save Changes" >
                </form>
                   </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

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
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
</script>
<script>
    $(function() {
        $('.switch').change(function() {
            id= $(this)[0].getAttribute('page-id');
            statu=$(this).prop('checked');
            $.get("{{route('admin.switch.content')}}", {id:id , statu:statu} , function(data, status){});
        })
    })
</script>
@endsection
