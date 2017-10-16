<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail_Angsuran;
use App\Angsuran;

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

    public function index(Request $request)
    {
        //
        $query = $request->get('search');
        $var = Detail_Angsuran::where('id_angsuran', 'LIKE', '%' . $query . '%')->orWhere('ket', 'LIKE', '%' . $query . '%')->paginate(2);
        return view('detail_angsuran.index', compact('var', 'query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $var = Angsuran::all();
        return view('detail_angsuran.create')->with('var' ,$var);;
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
           'idangsuran' => 'required', 'tgljatuh' => 'required', 'besarangsuran' => 'required', 'ket' => 'required'
        ]);

        $var = new Detail_Angsuran;
        $var->id_angsuran = $request->idangsuran;
        $var->tgl_jatuh_tempo = $request->tgljatuh;
        $var->besar_angsuran = $request->besarangsuran;
        $var->ket = $request->ket;
        $var->save();
        return redirect('detail_angsuran');
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
        return view('detail_angsuran.edit')->with('var', $var);
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
           'idangsuran' => 'required', 'tgljatuh' => 'required', 'besarangsuran' => 'required', 'ket' => 'required'
        ]);

        $var = Detail_Angsuran::find($id);
        $var->id_angsuran = $request->idangsuran;
        $var->tgl_jatuh_tempo = $request->tgljatuh;
        $var->besar_angsuran = $request->besarangsuran;
        $var->ket = $request->ket;
        $var->save();
        return redirect('detail_angsuran');
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
        return redirect('detail_angsuran');
    }
}
