<h1>CREATE</h1>

<form action="/simpanan" method="post">
    <input type="integer" name="id_simpanan" value="" placeholder="id_simpanan"><br>
    <input type="text" name="nm_simpanan" value="" placeholder="nm_simpanan"><br>
    <input type="integer" name="id_anggota" value="" placeholder="id_anggota"><br>
    <input type="date" name="tgl_simpanan" value="" placeholder="tgl_simpanan"><br>
    <input type="integer" name="besar_simpanan" value="" placeholder="besar_simpanan"><br>
    <input type="text" name="ket" value="" placeholder="ket"><br>
    <input type="submit" value="post">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>