@extends('back.layouts.master')
@section('title','Tüm Sayfalar')
@section('content')
<div class="card shadow mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Fotoğraf</th>
            <th>Sayfa Adi</th>
            <th>Oluşturulma Tarihi</th>
            <th>Durum</th>
            <th>İşlemler</th>
          </tr>
        </thead>
        <tbody>
          @Foreach($pages as $page)
          <tr>
            <td>
              <img src="{{asset($page->image)}}" class="img-thumbnail ruonded" width="200" />
            </td>
            <td>{{$page->title}}</td>
            <td>{{$page->created_at}}</td>
            <td>
              <input class="switch" page-id="{{$page->id}}" type="checkbox" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger" @if($page->status==1) checked @endif data-toggle="toggle">
            </td>
            <th>
              <a target="_blank" href="{{route('page',[$page->slug])}}" title="Görüntüle" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> </a>
              <a href="{{route('admin.sayfalar.edit',$page->id)}}" title="Düzenle" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i> </a>
              <a href="{{route('admin.delete.page',$page->id)}}" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> </a>
            </th>
          </tr>
          @endforeach
        </tbody>
      </table>
        <div class="float-center">
            {{$pages->links()}}
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
  $(function() {
    $('.switch').change(function() {
      id= $(this)[0].getAttribute('page-id');
      statu=$(this).prop('checked');
      $.get("{{route('admin.switch.page')}}", {id:id , statu:statu} , function(data, status){});
      })
    })
</script>
@endsection
