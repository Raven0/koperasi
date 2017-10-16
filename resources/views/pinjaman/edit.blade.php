<h1> EDIT </h1>
<form action="/pinjaman/{{$var->id_pinjaman}}" method="post">
    <input type="integer" name="id_pinjaman" value="{{$var->id_pinjaman}}" placeholder="id_pinjaman"><br>
    <input type="text" name="nama_pinjaman" value="{{$var->nama_pinjaman}}" placeholder="nama_pinjaman"><br>
    <input type="integer" name="id_anggota" value="{{$var->id_anggota}}" placeholder="id_anggota"><br>
    <input type="integer" name="besar_pinjaman" value="{{$var->besar_pinjaman}}" placeholder="besar_pinjaman"><br>
    <input type="date" name="tgl_pengajuan_pinjaman" value="{{$var->tgl_pengajuan_pinjaman}}" placeholder="tgl_pengajuan_pinjaman"><br>
    <input type="date" name="tgl_acc_peminjam" value="{{$var->tgl_acc_peminjam}}" placeholder="tgl_acc_peminjam"><br>
    <input type="date" name="tgl_pinjaman" value="{{$var->tgl_pinjaman}}" placeholder="tgl_pinjaman"><br>
    <input type="date" name="tgl_pelunasan" value="{{$var->tgl_pelunasan}}" placeholder="tgl_pelunasan"><br>
    <input type="integer" name="id_angsuran" value="{{$var->id_angsuran}}" placeholder="id_angsuran"><br>
    <input type="text" name="ket" value="{{$var->ket}}" placeholder="ket"><br>
    <input type="submit" value="edit">

    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>