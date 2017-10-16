<h1>CREATE</h1>

<form action="/pinjaman" method="post">
    <input type="integer" name="id_pinjaman" value="" placeholder="id_pinjaman" disabled><br>
    <input type="text" name="nama_pinjaman" value="" placeholder="nama_pinjaman"><br>
    <input type="integer" name="id_anggota" value="" placeholder="id_anggota"><br>
    <input type="integer" name="besar_pinjaman" value="" placeholder="besar_pinjaman"><br>
    <input type="date" name="tgl_pengajuan_pinjaman" value="" placeholder="tgl_pengajuan_pinjaman"><br>
    <input type="date" name="tgl_acc_peminjam" value="" placeholder="tgl_acc_peminjam"><br>
    <input type="date" name="tgl_pinjaman" value="" placeholder="tgl_pinjaman"><br>
    <input type="date" name="tgl_pelunasan" value="" placeholder="tgl_pelunasan"><br>
    <input type="integer" name="id_angsuran" value="" placeholder="id_angsuran"><br>
    <input type="text" name="ket" value="" placeholder="ket"><br>
    <input type="submit" value="post">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>