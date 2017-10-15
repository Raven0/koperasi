@extends('layouts.app')
<style>
    button{
        width: 100px;
    }
</style>

@section('panelhead')
Edit Angsuran
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
<form action="/angsuran/{{$var->id_angsuran}}" method="post">
    <div class="form-group">
        <label> Kategori </label>
        <input type="text" name="idkategori" value="{{$var->id_kategori}}" class="form-control">
    </div>
    <div class="form-group">
        <label> Anggota </label>
        <input type="text" name="idanggota" value="{{$var->id_anggota}}" class="form-control">
    </div>
    <div class="form-group">
        <label> Tanggal Pembayaran </label>
        <input type="date" name="tglbayar" value="{{$var->tgl_pembayaran}}" class="form-control">
    </div>
    <div class="form-group">
        <label> Angsuran Ke </label>
        <input type="number" name="angsuranke" value="{{$var->angsuran_ke}}" class="form-control">
    </div>
    <div class="form-group">
        <label> Besar Angsuran </label>
        <input type="number" name="besarangsuran" value="{{$var->besar_angsuran}}" class="form-control">
    </div>
    <div class="form-group">
        <label> Keterangan </label>
        <input type="text" name="ket" value="{{$var->ket}}" class="form-control">
    </div>

    <input type="submit" value="edit" class="btn btn-success">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>
@endsection
