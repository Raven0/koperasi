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
<form action="/simpanan/{{$var->id_simpanan}}" method="post">
    <div class="form-group">
        <label>Nama Simpanan</label>
        <input type="text" name="nm_simpanan" value="{{$var->nm_simpanan}}" class="form-control">
    </div>
    <div class="form-group">
        <label>Anggota</label>
        <input type="text" name="id_anggota" value="{{$var->id_anggota}}" class="form-control">
    </div>
    <div class="form-group">
        <label>Tgl Simpanan</label>
        <input type="date" name="tgl_simpanan" value="{{$var->tgl_simpanan}}" class="form-control">
    </div>
    <div class="form-group">
        <label>Besar</label>
        <input type="text" name="besar_simpanan" value="{{$var->besar_simpanan}}" class="form-control">
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
