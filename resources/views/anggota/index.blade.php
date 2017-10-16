@extends('layouts.app')
<style>
    button{
        width: 100px;
    }
</style>

@section('panelhead')
Anggota
@endsection

@section('create')
<a href="anggota/create" class="btn btn-success">
    Create
</a>
<br><br>

@endsection

@section('search')
<form class="form-inline mt-2 mt-md-0" method="get" action="/anggota">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
@endsection

@section('thead')
<th>Id Anggota</th>
<th>Nama</th>
<th>Alamat</th>
<th>Tgl Lahir</th>
<th>Tempat LAHIR</th>
<th>Kelamin</th>
<th>Stats</th>
<th>NOTELP</th>
<th>Keterangan</th>
<th>Action</th>
@endsection

@section('tbody')
@foreach($var as $vars)
    <tr>
        <td>{{ $vars->id_anggota}}</td>
        <td>{{ $vars->nama}}</td>
        <td>{{ $vars->alamat}}</td>
        <td>{{ $vars->tgl_lhr}}</td>
        <td>{{ $vars->tmp_lhr}}</td>
        <td>{{ $vars->j_kel}}</td>
        <td>{{ $vars->status}}</td>
        <td>{{ $vars->no_tlp}}</td>
        <td>{{ $vars->ket}}</td>
        <td>
            <a href="/anggota/{{$vars->id_anggota}}/edit" class="btn btn-warning">
                Edit
            </a>
            <a href="{{url('anggota/delete',$vars->id_anggota)}}" class="btn btn-danger">
                Delete
            </a>
        </td>
    </tr>
@endforeach
@endsection

@section('paginate')
{{ $var->links() }}
@endsection
