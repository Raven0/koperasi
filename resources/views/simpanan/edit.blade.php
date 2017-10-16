<h1> EDIT </h1>
<form action="/simpanan/{{$var->id_simpanan}}" method="post">
    <input type="integer" name="id_simpanan" value="{{$var->id_simpanan}}" placeholder="id_simpanan"><br>
    <input type="text" name="nm_simpanan" value="{{$var->nm_simpanan}}" placeholder="nm_simpanan"><br>
    <input type="integer" name="id_anggota" value="{{$var->id_anggota}}" placeholder="id_anggota"><br>
    <input type="date" name="tgl_simpanan" value="{{$var->tgl_simpanan}}" placeholder="tgl_simpanan"><br>
    <input type="integer" name="besar_simpanan" value="{{$var->besar_simpanan}}" placeholder="besar_simpanan"><br>
    <input type="text" name="ket" value="{{$var->ket}}" placeholder="ket"><br>
    <input type="submit" value="edit">

    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>