@extends('layouts.app')
<style>
    button{
        width: 100px;
    }
</style>

@section('panelhead')
Pinjaman
@endsection

@if(Auth::user()->role == 'ADMIN')
@section('create')
<a href="pinjaman/create" class="btn btn-success">
    Create
</a>
<br><br>

@endsection

@section('search')
<form class="form-inline mt-2 mt-md-0" method="get" action="/pinjaman">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
@endsection

@section('thead')
<th>Id</th>
<th>Nama Pinjaman</th>
<th>Anggota</th>
<th>Besar Pinjaman</th>
<th>Tgl Pengajuan</th>
<th>Tgl Acc</th>
<th>Tgl Pinjam</th>
<th>Tgl Lunas</th>
<th>Id Angsuran</th>
<th>Keterangan</th>
<th>Action</th>
@endsection

@section('tbody')
@foreach($var as $vars)
    <tr>
        <td>{{ $vars->id_pinjaman}}</td>
        <td>{{ $vars->nama_pinjaman}}</td>
        <td>{{ $vars->Anggota->nama}}</td>
        <td>{{ $vars->besar_pinjaman}}</td>
        <td>{{ $vars->tgl_pengajuan_pinjaman}}</td>
        <td>{{ $vars->tgl_acc_peminjam}}</td>
        <td>{{ $vars->tgl_pinjaman}}</td>
        <td>{{ $vars->tgl_pelunasan}}</td>
        <td>{{ $vars->id_angsuran}}</td>
        <td>{{ $vars->ket}}</td>
        <td>
            <a href="/pinjaman/{{$vars->id_pinjaman}}/edit" class="btn btn-warning">
                Edit
            </a>
            <a href="{{url('pinjaman/delete',$vars->id_pinjaman)}}" class="btn btn-danger">
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
@section('search')
<form class="form-inline mt-2 mt-md-0" method="get" action="/pinjaman">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
@endsection

@section('thead')
<th>Id</th>
<th>Nama Pinjaman</th>
<th>Anggota</th>
<th>Besar Pinjaman</th>
<th>Tgl Pengajuan</th>
<th>Tgl Acc</th>
<th>Tgl Pinjam</th>
<th>Tgl Lunas</th>
<th>Id Angsuran</th>
<th>Keterangan</th>
@endsection

@section('tbody')
@foreach($var as $vars)
    <tr>
        <td>{{ $vars->id_pinjaman}}</td>
        <td>{{ $vars->nama_pinjaman}}</td>
        <td>{{ $vars->Anggota->nama}}</td>
        <td>{{ $vars->besar_pinjaman}}</td>
        <td>{{ $vars->tgl_pengajuan_pinjaman}}</td>
        <td>{{ $vars->tgl_acc_peminjam}}</td>
        <td>{{ $vars->tgl_pinjaman}}</td>
        <td>{{ $vars->tgl_pelunasan}}</td>
        <td>{{ $vars->id_angsuran}}</td>
        <td>{{ $vars->ket}}</td>
    </tr>
@endforeach
@endsection

@section('paginate')
{{ $var->links() }}
@endsection
@endif
