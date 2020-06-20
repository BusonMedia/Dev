@extends('back.layouts.master')
@section('title','Tüm Makaleler')
@section('content')
<div class="card shadow mb-4">
  <div class="card-body">
      <a href="{{route('admin.language.create')}}"  class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Yeni Language Ekle </a>
      <hr>

      <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>StringID</th>
            <th>ContentTR</th>
            <th>ContentUSA</th>
            <th>Duzenle</th>
          </tr>
        </thead>
        <tbody>
          @Foreach($lang as $langs)
          <tr>

            <td>{{$langs->idstring}}</td>
            <td>{{$langs->ContentTR}}</td>
            <td>{{$langs->ContentUSA}}</td>

            <th>
              <a href="{{route('admin.language.edit',$langs->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i> </a>
            </th>
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
