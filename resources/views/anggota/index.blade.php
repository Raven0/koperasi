<h1> VIEW </h1>
<a href="anggota/create"> CREATE </a>
@foreach($var as $var)
    <p> {{ $var->id_anggota}} </p>
    <p> {{ $var->nama}} </p>
    <p> {{ $var->alamat}} </p>
    <p> {{ $var->tgl_lhr}} </p>
    <p> {{ $var->tmp_lhr}} </p>
    <p> {{ $var->j_kel}} </p>
    <p> {{ $var->status}} </p>
    <p> {{ $var->no_tlp}} </p>
    <p> {{ $var->ket}} </p>
    <a href="/anggota/{{$var->id_anggota}}/edit"> EDIT</a>||
    <form action="/anggota/{{$var->id_anggota}}" method="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        <input type="hidden" value="delete" name="_method">
        <input type="submit" value="delete">
</form>
    <hr>
@endforeach