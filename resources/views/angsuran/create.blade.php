@extends('layouts.app')
<style>
    button{
        width: 100px;
    }
</style>

@section('panelhead')
Create Angsuran
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
<form action="/angsuran" method="post">
    <div class="form-group">
        <label> Kategori </label>
        <select class="form-control" name="idkategori">
            <option value="">--SELECT--</option>
            @foreach($kategori as $v)
                <option value="{{$v->id_kategori}}">{{$v->nama_pinjaman}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label> Anggota </label>
        <input type="text" name="idanggota" value="" class="form-control">
    </div>
    <div class="form-group">
        <label> Tanggal Pembayaran </label>
        <input type="date" name="tglbayar" value="" class="form-control">
    </div>
    <div class="form-group">
        <label> Angsuran Ke </label>
        <input type="number" name="angsuranke" value="" class="form-control">
    </div>
    <div class="form-group">
        <label> Besar Angsuran </label>
        <input type="number" name="besarangsuran" value="" class="form-control">
    </div>
    <div class="form-group">
        <label> Keterangan </label>
        <input type="text" name="ket" value="" class="form-control">
    </div>

    <input type="submit" value="Create" class="btn btn-success">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>
@endsection
