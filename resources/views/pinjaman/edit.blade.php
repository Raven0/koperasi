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
        <select class="form-control" name="id_anggota">
            <option value="">--SELECT--</option>
            @foreach($a as $v)
                <option value="{{$v->id_anggota}}" @if($var->id_anggota==$v->id_anggota) selected @endif>{{$v->nama}}</option>
            @endforeach
        </select>
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
        <select name="id_angsuran" class="form-control">
            <option value="">--SELECT--</option>
            @foreach($b as $v)
                <option value="{{$v->id_angsuran}}" @if($var->id_angsuran==$v->id_angsuran) selected @endif >{{$v->id_angsuran}}</option>
            @endforeach
        </select>
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
