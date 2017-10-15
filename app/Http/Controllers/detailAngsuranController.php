<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail_Angsuran;

class detailAngsuranController extends Controller
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

    public function index()
    {
        //
        $vars = Detail_Angsuran::all();
        return view('detail_Angsuran.index',['var' => $vars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('detail_Angsuran.create');
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
        $this->validate($request, [
           'idkategori' => 'required', 'idanggota' => 'required', 'tglbayar' => 'required', 'angsuranke' => 'required', 'besarangsuran' => 'required', 'ket' => 'required'
        ]);

        $var = new Detail_Angsuran;
        $var->id_kategori = $request->idkategori;
        $var->id_anggota = $request->idanggota;
        $var->tgl_pembayaran = $request->tglbayar;
        $var->angsuran_ke = $request->angsuranke;
        $var->besar_angsuran = $request->besarangsuran;
        $var->ket = $request->ket;
        $var->save();
        return redirect('detail_Angsuran');
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
        $var = Detail_Angsuran::find($id);
        if(!$var){
            abort(404);
        }

        return view('detail_Angsuran.edit')->with('var', $var);
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
        $this->validate($request, [
            'idkategori' => 'required', 'idanggota' => 'required', 'tglbayar' => 'required', 'angsuranke' => 'required', 'besarangsuran' => 'required', 'ket' => 'required'
        ]);

        $var = Detail_Angsuran::find($id);
        $var->id_kategori = $request->idkategori;
        $var->id_anggota = $request->idanggota;
        $var->tgl_pembayaran = $request->tglbayar;
        $var->angsuran_ke = $request->angsuranke;
        $var->besar_angsuran = $request->besarangsuran;
        $var->ket = $request->ket;
        $var->save();
        return redirect('detail_Angsuran');
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
        $var = Detail_Angsuran::find($id);
        $var ->delete();
        return redirect('detail_Angsuran');
    }
}
