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
































@extends('layouts.app')
<style>
    button{
        width: 100px;
    }
</style>

@section('panelhead')
Edit Pinjaman
@endsection

@section('create')

@if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif
<form action="/pinjaman/{{$var->id_pinjaman}}" method="post">
    <div class="form-group">
        <label>Nama Pinjaman</label>
        <input type="text" name="nama_pinjaman" value="{{$var->nama_pinjaman}}" class="form-control">
    </div>
    <div class="form-group">
        <label>Anggota</label>
        <input type="text" name="id_anggota" value="{{$var->id_anggota}}" class="form-control">
    </div>
    <div class="form-group">
        <label>Besar Pinjaman</label>
        <input type="text" name="besar_pinjaman" value="{{$var->besar_pinjaman}}" class="form-control">
    </div>
    <div class="form-group">
        <label>Tgl Pengajuan</label>
        <input type="date" name="tgl_pengajuan_pinjaman" value="{{$var->tgl_pengajuan_pinjaman}}" class="form-control">
    </div>
    <div class="form-group">
        <label>Tgl Acc</label>
        <input type="date" name="tgl_acc_peminjam" value="{{$var->tgl_acc_peminjam}}" class="form-control">
    </div>
    <div class="form-group">
        <label>Tgl Pinjam</label>
        <input type="date" name="tgl_pinjaman" value="{{$var->tgl_pinjaman}}" class="form-control">
    </div>
    <div class="form-group">
        <label>Tgl Lunas</label>
        <input type="date" name="tgl_pelunasan" value="{{$var->tgl_pelunasan}}" class="form-control">
    </div>
    <div class="form-group">
        <label>Angsuran</label>
        <input type="text" name="id_angsuran" value="{{$var->id_angsuran}}" class="form-control">
    </div>
    <div class="form-group">
        <label>Keterangan</label>
        <input type="text" name="ket" value="{{$var->ket}}" class="form-control">
    </div>

    <input type="submit" value="edit" class="btn btn-success">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>
@endsection
