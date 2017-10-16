@extends('layouts.app')
<style>
    button{
        width: 100px;
    }
</style>

@section('panelhead')
Detail Angsuran
@endsection

@section('create')
<a href="detail_angsuran/create" class="btn btn-success">
    Create
</a>
<br><br>

@endsection

@section('search')
<form class="form-inline mt-2 mt-md-0" method="get" action="/detail_angsuran">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
@endsection

@section('thead')
<th>Id Angsuran</th>
<th>Tgl Jatuh Tempo</th>
<th>Besar Angsuran</th>
<th>Keterangan</th>
<th>Action</th>
@endsection

@section('tbody')
@foreach($var as $vars)
    <tr>
        <td>{{ $vars->id_angsuran}}</td>
        <td>{{ $vars->tgl_jatuh_tempo}}</td>
        <td>{{ $vars->besar_angsuran}}</td>
        <td>{{ $vars->ket}}</td>
        <td>
            <a href="/detail_angsuran/{{$vars->id}}/edit" class="btn btn-warning">
                Edit
            </a>
            <a href="{{url('detail_angsuran/delete',$vars->id)}}" class="btn btn-danger">
                Delete
            </a>
        </td>
    </tr>
@endforeach
@endsection

@section('paginate')
{{ $var->links() }}
@endsection
