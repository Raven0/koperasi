<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Angsuran;
use App\Kategori;
use App\Anggota;

class angsuranController extends Controller
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
        $var = Angsuran::where('id_angsuran', 'LIKE', '%' . $query . '%')->orWhere('ket', 'LIKE', '%' . $query . '%')->paginate(2);
        return view('angsuran.index', compact('var', 'query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $K = Kategori::all();
        $A = Anggota::all();
        return view('angsuran.create')->with('kategori' ,$K)->with('anggota' ,$A);
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

        $var = new Angsuran;
        $var->id_kategori = $request->idkategori;
        $var->id_anggota = $request->idanggota;
        $var->tgl_pembayaran = $request->tglbayar;
        $var->angsuran_ke = $request->angsuranke;
        $var->besar_angsuran = $request->besarangsuran;
        $var->ket = $request->ket;
        $var->save();
        return redirect('angsuran');
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
        $var = Angsuran::find($id);
        if(!$var){
            abort(404);
        }

        return view('angsuran.edit')->with('var', $var);
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

        $var = Angsuran::find($id);
        $var->id_kategori = $request->idkategori;
        $var->id_anggota = $request->idanggota;
        $var->tgl_pembayaran = $request->tglbayar;
        $var->angsuran_ke = $request->angsuranke;
        $var->besar_angsuran = $request->besarangsuran;
        $var->ket = $request->ket;
        $var->save();
        return redirect('angsuran');
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
        $var = Angsuran::find($id);
        $var ->delete();
        return redirect('angsuran');
    }
}
