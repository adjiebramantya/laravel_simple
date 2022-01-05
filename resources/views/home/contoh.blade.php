@extends('layouts.index')

@section('content')
    <p>Klik tombol Di bawah</p>
    <form class="" action="{{ url('home/contoh') }}" method="POST">
      @csrf
      <input type="text" name="nama" value="">
      <button type="submit" name="simpan">SUBMIT</button>
    </form>
@endsection
