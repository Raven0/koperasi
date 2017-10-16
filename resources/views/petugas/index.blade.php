<h1> VIEW </h1>
<a href="petugas/create"> CREATE </a>
@foreach($var as $var)
    <p> {{ $var->id_petugas}} </p>
    <p> {{ $var->nama}} </p>
    <p> {{ $var->alamat}} </p>
    <p> {{ $var->no_tlp}} </p>
    <p> {{ $var->tmp_lhr}} </p>
    <p> {{ $var->tgl_lhr}} </p>
    <p> {{ $var->ket}} </p>
    <hr>
@endforeach
