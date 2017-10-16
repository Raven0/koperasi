@extends('layouts.app')
<style>
    button{
        width: 100px;
    }
</style>

@section('panelhead')
Simpanan
@endsection

@section('create')
<a href="simpanan/create" class="btn btn-success">
    Create
</a>
<br><br>

@endsection

@section('search')
<form class="form-inline mt-2 mt-md-0" method="get" action="/simpanan">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
@endsection

@section('thead')
<th>Id Simpanan</th>
<th>Nama Simpanan</th>
<th>Id Anggota</th>
<th>Tgl Simpanan</th>
<th>Besar Simpanan</th>
<th>Keterangan</th>
<th>Action</th>
@endsection

@section('tbody')
@foreach($var as $vars)
    <tr>
        <td>{{ $vars->id_simpanan}}</td>
        <td>{{ $vars->nm_simpanan}}</td>
        <td>{{ $vars->id_anggota}}</td>
        <td>{{ $vars->tgl_simpanan}}</td>
        <td>{{ $vars->besar_simpanan}}</td>
        <td>{{ $vars->ket}}</td>
        <td>
            <a href="/simpanan/{{$vars->id_simpanan}}/edit" class="btn btn-warning">
                Edit
            </a>
            <a href="{{url('simpanan/delete',$vars->id_simpanan)}}" class="btn btn-danger">
                Delete
            </a>
        </td>
    </tr>
@endforeach
@endsection

@section('paginate')
{{ $var->links() }}
@endsection
