@extends('layouts.app')
<style>
    button{
        width: 100px;
    }
</style>

@section('panelhead')
Create Kategori
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
<form action="/kategori" method="post">
    <div class="form-group">
        <label> Nama Pinjaman </label>
        <input type="text" name="name" value="" class="form-control">
    </div>
    <input type="submit" value="Create" class="btn btn-success">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>
@endsection
