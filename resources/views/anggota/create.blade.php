<h1>CREATE</h1>

<form action="/anggota" method="post">
    <input type="integer" name="id_anggota" value="" placeholder="id_anggota"><br>
    <input type="text" name="nama" value="" placeholder="nama"><br>
    <input type="text" name="alamat" value="" placeholder="alamat"><br>
    <input type="date" name="tgl_lhr" value="" placeholder="tgl_lhr"><br>
    <input type="text" name="tmp_lhr" value="" placeholder="tmp_lhr"><br>
    <input type="text" name="j_kel" value="" placeholder="j_kel"><br>
    <input type="text" name="status" value="" placeholder="status"><br>
    <input type="integer" name="no_tlp" value="" placeholder="no_tlp"><br>
    <input type="text" name="ket" value="" placeholder="ket"><br>
    <input type="submit" value="post">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>