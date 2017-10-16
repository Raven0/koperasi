@extends('layouts.app')
<style>
    button{
        width: 100px;
    }
</style>

@section('panelhead')
Create Detail Angsuran
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
<form action="/detail_angsuran" method="post">
    <div class="form-group">
        <label> Angsuran </label>
        <select class="form-control" name="idangsuran">
            <option value="">--SELECT--</option>
            @foreach($var as $v)
                <option value="{{$v->id_angsuran}}">{{$v->id_angsuran}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label> Tanggal Jatuh Tempo </label>
        <input type="date" name="tgljatuh" value="" class="form-control">
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
