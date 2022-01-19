@extends('layouts.index')

@section('content')
</br>
  <form class="" action="{{url('pegawai')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include('pegawai._form')
  </form>
@endsection
