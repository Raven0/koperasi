@extends('layouts.app')
<style>
    button{
        width: 100px;
    }
</style>

@section('panelhead')
Angsuran
@endsection

@section('create')
<a href="angsuran/create" class="btn btn-success">
    Create
</a>
<br><br>

@endsection

@section('search')
<form class="form-inline mt-2 mt-md-0" method="get" action="/angsuran">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
@endsection

@section('thead')
<th>Id Angsuran</th>
<th>Id Kategori</th>
<th>Id Anggota</th>
<th>Tgl Pembayaran</th>
<th>Angsuran Ke</th>
<th>Besar Angsuran</th>
<th>Keterangan</th>
<th>Action</th>
@endsection

@section('tbody')
@foreach($var as $vars)
    <tr>
        <td>{{ $vars->id_angsuran}}</td>
        <td>{{ $vars->id_kategori}}</td>
        <td>{{ $vars->id_anggota}}</td>
        <td>{{ $vars->tgl_pembayaran}}</td>
        <td>{{ $vars->angsuran_ke}}</td>
        <td>{{ $vars->besar_angsuran}}</td>
        <td>{{ $vars->ket}}</td>
        <td>
            <a href="/angsuran/{{$vars->id_angsuran}}/edit" class="btn btn-warning">
                Edit
            </a>
            <a href="{{url('angsuran/delete',$vars->id_angsuran)}}" class="btn btn-danger">
                Delete
            </a>
        </td>
    </tr>
@endforeach
@endsection

@section('paginate')
{{ $var->links() }}
@endsection
