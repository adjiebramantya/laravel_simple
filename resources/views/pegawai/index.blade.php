@extends('layouts.index')

@section('content')
<br>
@if(Session::has('success'))
<p class="alert alert-success">{{ Session::get('success')}}</p><br>
@endif

<a class="btn btn-info" href="{{ url('pegawai/create')}}">Tambah Pegawai</a>
<br><br>
<form class="" action="{{ url('pegawai') }}" method="GET">
  <input type="text" name="keyword" value="{{ $keyword }}">
  <button type="submit">Search</button>
</form>
<br>
  <table class="table-bordered table">
    <tr>
      <th>Foto Profile</th>
      <th>Nama</th>
      <th>Tanggal Lahir</th>
      <th>Gelar</th>
      <th>NIP</th>
      <th colspan="2">Aksi</th>
    </tr>
    @foreach($datas as $key=>$value)
    <tr>
      <td>
        @if(strlen($value->foto_profile>0))
        <img src="{{asset('foto/'.$value->foto_profile)}}" alt="">
        @endif
      </td>
      <td>{{ $value->nama }}</td>
      <td>{{ $value->tanggal_lahir }}</td>
      <td>{{ $value->gelar }}</td>
      <td>{{ $value->nip }}</td>
      <td><a class="btn btn-info" href="{{url('pegawai/'.$value->id.'/edit')}}">Edit</a></td>
      <td>
        <form class="" action="{{url('pegawai/'.$value->id)}}" method="post">
          @csrf
          <input type="hidden" name="_method" value="DELETE">
          <button class="btn btn-danger" type="submit">Hapus</button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
  <div class="d-flex justify-content-center">

    {{ $datas->links() }}

  </div>
@endsection
