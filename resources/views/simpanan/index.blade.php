<h1> VIEW </h1>
<a href="simpanan/create"> CREATE </a>
@foreach($var as $var)
    <p> {{ $var->id_simpanan}} </p>
    <p> {{ $var->nm_simpanan}} </p>
    <p> {{ $var->id_anggota}} </p>
    <p> {{ $var->tgl_simpanan}} </p>
    <p> {{ $var->besar_simpanan}} </p>
    <p> {{ $var->ket}} </p>
    <a href="/simpanan/{{$var->id_simpanan}}/edit"> EDIT</a> ||
    <form action="/simpanan/{{$var->id_simpanan}}" method="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        <input type="hidden" value="delete" name="_method">
        <input type="submit" value="delete">
</form>
    <hr>
@endforeach