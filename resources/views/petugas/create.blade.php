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
<form action="/petugas" method="post">
    <div class="form-group">
        <label> Nama </label>
        <input type="text" name="nama_petugas" value="" class="form-control">
    </div>
    <div class="form-group">
        <label> Alamat </label>
        <input type="text" name="alamat" value="" class="form-control">
    </div>
    <div class="form-group">
        <label> Telepon </label>
        <input type="text" name="no_tlp" value="" class="form-control">
    </div>
    <div class="form-group">
        <label> Tempat Lahir </label>
        <input type="text" name="tmp_lhr" value="" class="form-control">
    </div>
    <div class="form-group">
        <label> Tanggal Lahir </label>
        <input type="date" name="tgl_lhr" value="" class="form-control">
    </div>
    <div class="form-group">
        <label> Keterangan </label>
        <input type="text" name="ket" value="" class="form-control">
    </div>

    <input type="submit" value="Create" class="btn btn-success">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>
@endsection
