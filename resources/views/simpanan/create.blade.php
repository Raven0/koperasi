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
<form action="/simpanan" method="post">
    <div class="form-group">
        <label>Nama Simpanan</label>
        <input type="text" name="nm_simpanan" value="" class="form-control">
    </div>
    <div class="form-group">
        <label>Anggota</label>
        <select class="form-control" name="id_anggota">
            <option value="">--SELECT--</option>
            @foreach($a as $v)
                <option value="{{$v->id_anggota}}" >{{$v->nama}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Tgl Simpanan</label>
        <input type="date" name="tgl_simpanan" value="" class="form-control">
    </div>
    <div class="form-group">
        <label>Besar</label>
        <input type="text" name="besar_simpanan" value="" class="form-control">
    </div>
    <div class="form-group">
        <label>Keterangan</label>
        <input type="text" name="ket" value="" class="form-control">
    </div>

    <input type="submit" value="Create" class="btn btn-success">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>
@endsection
