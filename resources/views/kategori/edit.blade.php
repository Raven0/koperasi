@extends('layouts.app')
<style>
    button{
        width: 100px;
    }
</style>

@section('panelhead')
Edit Kategori
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
<form action="/kategori/{{$var->id}}" method="post">
    <div class="form-group">
        <label> Nama Kategori </label>
        <input type="text" name="name" value="{{$var->nama_pinjaman}}" class="form-control">
    </div>
    <input type="submit" value="edit" class="btn btn-success">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>
@endsection
