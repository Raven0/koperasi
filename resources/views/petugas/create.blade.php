@if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif
<h1>CREATE</h1>

<form action="/petugas" method="post">
    <input type="text" name="nama_petugas" value="" placeholder="plane"><br>
    <input type="text" name="alamat" value="" placeholder="airline"><br>
    <input type="text" name="no_tlp" value="" placeholder="airline"><br>
    <input type="text" name="tmp_lhr" value="" placeholder="airline"><br>
    <input type="date" name="tgl_lhr" value="" placeholder="airline"><br>
    <input type="text" name="ket" value="" placeholder="airline"><br>
    <input type="submit" value="post">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>
