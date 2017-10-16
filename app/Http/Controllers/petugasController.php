<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Petugas;

class petugasController extends Controller
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
        $var = Petugas::where('id_petugas', 'LIKE', '%' . $query . '%')->orWhere('nama', 'LIKE', '%' . $query . '%')->paginate(5);
        return view('petugas.index', compact('var', 'query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('petugas.create');
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
          'nama_petugas' => 'required', 'alamat' => 'required', 'no_tlp' => 'required', 'tmp_lhr' => 'required', 'tgl_lhr' => 'required', 'ket' => 'required',
       ]);

       $var = new Petugas;
       $var->nama = $request->nama_petugas;
       $var->alamat = $request->alamat;
       $var->no_tlp = $request->no_tlp;
       $var->tmp_lhr = $request->tmp_lhr;
       $var->tgl_lhr = $request->tgl_lhr;
       $var->ket = $request->ket;
       $var->save();
       return redirect('petugas');
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
        $var = Petugas::find($id);
        if(!$var){
            abort(404);
        }

        return view('petugas.edit')->with('var', $var);
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
          'nama_petugas' => 'required', 'alamat' => 'required', 'no_tlp' => 'required', 'tmp_lhr' => 'required', 'tgl_lhr' => 'required', 'ket' => 'required',
        ]);

        $var = Petugas::find($id);
        $var->nama = $request->nama_petugas;
        $var->alamat = $request->alamat;
        $var->no_tlp = $request->no_tlp;
        $var->tmp_lhr = $request->tmp_lhr;
        $var->tgl_lhr = $request->tgl_lhr;
        $var->ket = $request->ket;
        $var->save();
        return redirect('petugas');
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
        $var = Petugas::find($id);
        $var ->delete();
        return redirect('petugas');
    }
}
