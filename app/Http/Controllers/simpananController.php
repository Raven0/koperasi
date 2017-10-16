<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Simpanan;

class simpananController extends Controller
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
        $var = Simpanan::where('id_simpanan', 'LIKE', '%' . $query . '%')->orWhere('nm_simpanan', 'LIKE', '%' . $query . '%')->paginate(2);
        return view('simpanan.index', compact('var', 'query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('simpanan.create');
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
        $var = new Simpanan;
        $var->nm_simpanan = $request->nm_simpanan;
        $var->id_anggota = $request->id_anggota;
        $var->tgl_simpanan = $request->tgl_simpanan;
        $var->besar_simpanan = $request->besar_simpanan;
        $var->ket = $request->ket;
        $var->save();
        return redirect('simpanan');
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
        $var = Simpanan::find($id);
        if(!$var){
            abort(404);
        }

        return view('simpanan.edit')->with('var', $var);
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
        $var = Simpanan::find($id);
        $var->nm_simpanan = $request->nm_simpanan;
        $var->id_anggota = $request->id_anggota;
        $var->tgl_simpanan = $request->tgl_simpanan;
        $var->besar_simpanan = $request->besar_simpanan;
        $var->ket = $request->ket;
        $var ->save();
        return redirect('simpanan');
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
        $var = Simpanan::find($id);
        $var ->delete();
        return redirect('simpanan');
    }
}
