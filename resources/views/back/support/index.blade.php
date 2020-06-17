@extends('back.layouts.master');
@section('title','Destek/Iletisim')
@section('content')
<div class="card shadow mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Sayfa Adi</th>
            <th>Oluşturulma Tarihi</th>
            <th>Konu</th>
            <th>Mesaj</th>
            <th>Gonderim Tarihi</th>
            <th>Guncellenme Tarihi</th>
          </tr>
        </thead>
        <tbody>
          @Foreach($contact as $contacts)

            <td>{{$contacts->name}}</td>
            <td>{{$contacts->email}}</td>
            <td>{{$contacts->topic}}</td>
            <td>{{$contacts->message}}</td>
            <td>{{$contacts->created_at}}</td>
            <td>{{$contacts->updated_at}}</td>

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
