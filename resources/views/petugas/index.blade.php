@extends('layouts.app')
<style>
    button{
        width: 100px;
    }
</style>

@section('panelhead')
Petugas
@endsection

@if(Auth::user()->role == 'ADMIN')
@section('create')
<a href="petugas/create" class="btn btn-success">
    Create
</a>
<br><br>

@endsection

@section('search')
<form class="form-inline mt-2 mt-md-0" method="get" action="/petugas">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
@endsection

@section('thead')
<th>Id Petugas</th>
<th>Nama</th>
<th>Alamat</th>
<th>Telepon</th>
<th>Tempat Lahir</th>
<th>Tanggal Lahir</th>
<th>Keterangan</th>
<th>Action</th>
@endsection

@section('tbody')
@foreach($var as $vars)
    <tr>
        <td>{{ $vars->id_petugas}}</td>
        <td>{{ $vars->nama}}</td>
        <td>{{ $vars->alamat}}</td>
        <td>{{ $vars->no_tlp}}</td>
        <td>{{ $vars->tmp_lhr}}</td>
        <td>{{ $vars->tgl_lhr}}</td>
        <td>{{ $vars->ket}}</td>
        <td>
            <a href="/petugas/{{$vars->id_petugas}}/edit" class="btn btn-warning">
                Edit
            </a>
            <a href="{{url('petugas/delete',$vars->id_petugas)}}" class="btn btn-danger">
                Delete
            </a>
        </td>
    </tr>
@endforeach
@endsection

@section('paginate')
{{ $var->links() }}
@endsection
@else
@section('create')
Welcome USER!
@endsection
@endif
