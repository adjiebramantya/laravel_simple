<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Belajar Blade</title>
  </head>
  <body>
    <p> Halo {{ $nama }}</p>
    <p>Contoh foreach</p>
    <ul>
      @foreach($daftar_hewan as $key=>$value)
        <li>{{ $key+1}}. {{ $value }}</li>
      @endforeach
    </ul>

    <p>Contoh For</p>
    <ul>
      @for($i=0;$i<3;$i++)
      <li>{{ $i+1}}. {{$daftar_hewan[$i]}}</li>
      @endfor
    </ul>

    <p>Contoh For dan If</p>
    <ul>
      @for($i=0;$i<3;$i++)
      @if(($i+1)%2==1)
            <li>{{ $i+1}}. {{$daftar_hewan[$i]}}</li>
      @endif
      @endfor
    </ul>
  </body>
</html>
