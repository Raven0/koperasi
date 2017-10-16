<h1> VIEW </h1>
<a href="pinjaman/create"> CREATE </a>
@foreach($var as $var)
    <p> {{ $var->id_pinjaman}} </p>
    <p> {{ $var->nama_pinjaman}} </p>
    <p> {{ $var->id_anggota}} </p>
    <p> {{ $var->besar_pinjaman}} </p>
    <p> {{ $var->tgl_pengajuan_pinjaman}} </p>
    <p> {{ $var->tgl_acc_peminjam}} </p>
    <p> {{ $var->tgl_pinjam}} </p>
    <p> {{ $var->tgl_pelunasan}} </p>
    <p> {{ $var->id_angsuran}} </p>
    <p> {{ $var->ket}} </p>
    <a href="/pinjaman/{{$var->id_pinjaman}}/edit"> EDIT</a> || 
    <form action="/pinjaman/{{$var->id_pinjaman}}" method="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        <input type="hidden" value="delete" name="_method">
        <input type="submit" value="delete">
    </form>
    <hr>

@endforeach