@extends('layouts.app')
<style>
    button{
        width: 100px;
    }
</style>

@section('panelhead')
Edit Detail Angsuran
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
<form action="/detail_angsuran/{{$var->id}}" method="post">
    <div class="form-group">
        <label> Angsuran </label>
        <input type="text" name="idangsuran" value="{{$var->id_angsuran}}" class="form-control">
    </div>
    <div class="form-group">
        <label> Tanggal Jatuh Tempo </label>
        <input type="date" name="tgljatuh" value="{{$var->tgl_jatuh_tempo}}" class="form-control">
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
