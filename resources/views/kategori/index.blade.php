@extends('layouts.app')
<style>
    button{
        width: 100px;
    }
</style>

@section('panelhead')
Pendaftaran
@endsection

@section('create')
<a href="kategori/create" class="btn btn-success">
    Create
</a>
<br><br>

@endsection

@section('search')
<form class="form-inline mt-2 mt-md-0" method="get" action="/kategori">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
@endsection

@section('thead')
<th>Id</th>
<th>Nama Pinjaman</th>
<th>Action</th>
@endsection

@section('tbody')
@foreach($var as $var)
    <tr>
        <td>{{ $var->id_kategori}}</td>
        <td>{{ $var->nama_pinjaman}}</td>
        <td>
            <a href="/kategori/{{$var->id_kategori}}/edit" class="btn btn-warning">
                Edit
            </a>
            <a href="{{url('kategori/delete',$var->id_kategori)}}" class="btn btn-danger">
                Delete
            </a>
        </td>
    </tr>
@endforeach
@endsection
