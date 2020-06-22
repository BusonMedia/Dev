@extends('back.layouts.master')
@section('title','Destek/Iletisim')
@section('content')

      <table class="table table-bordered"  width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Musteri Adi</th>
            <th>Musteri Email</th>
            <th>Musteri Telefon</th>
            <th>Mesaj</th>
            <th>Urun</th>
            <th>Talep Tarihi</th>
            <th>Guncellenme(Görüşülme) Tarihi</th>
            <th>Durum</th>
          </tr>
        </thead>
        <tbody>
          @Foreach($contact as $contacts)

            <td>{{$contacts->name}}</td>
            <td>{{$contacts->email}}</td>
            <td>{{$contacts->phone}}</td>
            <td>{{$contacts->message}}</td>
            <td>{{$contacts->product}}</td>
            <td>{{$contacts->created_at}}</td>
            <td>{{$contacts->updated_at}}</td>
            <td>
                <input class="switch" page-id="{{$contacts->id}}" type="checkbox" data-on="Görüşüldü" data-off="Beklemede" data-onstyle="success" data-offstyle="danger" @if($contacts->status==1) checked @endif data-toggle="toggle">
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="float-center">
          {{$contact->links()}}
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
                $.get("{{route('admin.switch.demand')}}", {id:id , statu:statu} , function(data, status){});
            })
        })
    </script>
@endsection
