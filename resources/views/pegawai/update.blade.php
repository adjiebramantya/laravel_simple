@extends('layouts.index')

@section('content')
</br>
  <form class="" action="{{url('pegawai/'.$model->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    @include('pegawai._form')
  </form>
@endsection
