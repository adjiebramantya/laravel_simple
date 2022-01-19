Nama : <input type="text" name="nama" value="{{ $model->nama }}">
@foreach($errors->get('nama') as $msg)
  <p class="text-danger">{{ $msg }}</p>
@endforeach
Tanggal Lahir : <input type="text" name="tanggal_lahir" value="{{ $model->tanggal_lahir }}">
@foreach($errors->get('tanggal_lahir') as $msg)
  <p class="text-danger">{{ $msg }}</p>
@endforeach
Gelar : <input type="text" name="gelar" value="{{ $model->gelar }}">
@foreach($errors->get('gelar') as $msg)
  <p class="text-danger">{{ $msg }}</p>
@endforeach
NIP : <input type="text" name="nip" value="{{ $model->nip }}">
@foreach($errors->get('nip') as $msg)
  <p class="text-danger">{{ $msg }}</p>
@endforeach
Foto : <input type="file" name="foto_profile" value="{{ $model->foto_profile }}">
@foreach($errors->get('foto_profile') as $msg)
  <p class="text-danger">{{ $msg }}</p>
@endforeach
@if(strlen($model->foto_profile)>0)
<img src="{{asset('foto/'.$model->foto_profile)}}" alt="">
@endif
<button type="submit" name="button">Submit</button>
