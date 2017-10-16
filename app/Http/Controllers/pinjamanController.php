<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pinjaman;

class pinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vars = pinjaman::all();
         return view('pinjaman.index',['var' => $vars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pinjaman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $var = new pinjaman;
        $var->id_pinjaman = $request->id_pinjaman;
        $var->nama_pinjaman = $request->nama_pinjaman;
        $var->id_anggota = $request->id_anggota;
        $var->besar_pinjaman = $request->besar_pinjaman;
        $var->tgl_pengajuan_pinjaman = $request->tgl_pengajuan_pinjaman;
        $var->tgl_acc_peminjam = $request->tgl_acc_peminjam;
        $var->tgl_pinjaman = $request->tgl_pinjaman;
        $var->tgl_pelunasan = $request->tgl_pelunasan;
        $var->id_angsuran = $request->id_angsuran;
        $var->ket = $request->ket;
        $var->save();
        return redirect('pinjaman');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $var = pinjaman::find($id);
        if(!$var){
            abort(404);
        }
        return view('pinjaman.edit')->with('var', $var);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $var = pinjaman::find($id);
        $var->id_pinjaman = $request->id_pinjaman;
        $var->nama_pinjaman = $request->nama_pinjaman;
        $var->id_anggota = $request->id_anggota;
        $var->besar_pinjaman = $request->besar_pinjaman;
        $var->tgl_pengajuan_pinjaman = $request->tgl_pengajuan_pinjaman;
        $var->tgl_acc_peminjam = $request->tgl_acc_peminjam;
        $var->tgl_pinjaman = $request->tgl_pinjaman;
        $var->tgl_pelunasan = $request->tgl_pelunasan;
        $var->id_angsuran = $request->id_angsuran;
        $var->ket = $request->ket;
        $var ->save();
        return redirect('pinjaman');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $var = pinjaman::find($id);
        $var ->delete();
        return redirect('pinjaman');
    }
}
