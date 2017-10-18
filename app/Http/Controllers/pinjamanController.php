<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pinjaman;
use App\Anggota;
use App\Angsuran;

class pinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index(Request $request)
    {
        //
        $query = $request->get('search');
        $var = Pinjaman::where('id_pinjaman', 'LIKE', '%' . $query . '%')->orWhere('nama_pinjaman', 'LIKE', '%' . $query . '%')->paginate(2);
        return view('pinjaman.index', compact('var', 'query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $a = Anggota::all();
        $b = Angsuran::all();
        return view('pinjaman.create')->with('a',$a)->with('b',$b);
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
        $var = new Pinjaman;
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
        $a = Anggota::all();
        $b = Angsuran::all();
        $var = Pinjaman::find($id);
        if(!$var){
            abort(404);
        }
        return view('pinjaman.edit')->with('var', $var)->with('a',$a)->with('b',$b);
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
        $var = Pinjaman::find($id);
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
        $var = Pinjaman::find($id);
        $var ->delete();
        return redirect('pinjaman');
    }
}
