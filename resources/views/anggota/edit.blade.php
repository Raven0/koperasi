<h1> EDIT </h1>
<form action="/anggota/{{$var->id_anggota}}" method="post">
    <input type="integer" name="id_anggota" value="{{$var->id_anggota}}" placeholder="id_anggota"><br>
    <input type="text" name="nama" value="{{$var->nama}}" placeholder="nama"><br>
    <input type="text" name="alamat" value="{{$var->alamat}}" placeholder="alamat"><br>
    <input type="date" name="tgl_lhr" value="{{$var->tgl_lhr}}" placeholder="tgl_lhr"><br>
    <input type="text" name="tmp_lhr" value="{{$var->tgl_lhr}}" placeholder="tmp_lhr"><br>
    <input type="text" name="j_kel" value="{{$var->j_kel}}" placeholder="j_kel"><br>
    <input type="text" name="status" value="{{$var->status}}" placeholder="status"><br>
    <input type="integer" name="no_tlp" value="{{$var->no_tlp}}" placeholder="no_tlp"><br>
    <input type="text" name="ket" value="{{$var->ket}}" placeholder="ket"><br>
    <input type="submit" value="edit">

    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>