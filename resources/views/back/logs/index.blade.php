@extends('back.layouts.master')
@section('title','Destek/Iletisim')
@section('content')

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Sayfa Adi</th>
            <th>Son Aktivite</th>
          </tr>
        </thead>
        <tbody>
          @Foreach($user as $users)
        <tr>
            <td>{{$users->username}}</td>
            <td>{{$users->last_activate}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>


@endsection
@section('css')
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
