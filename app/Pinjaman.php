<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    //
    protected $table = 'pinjaman';
    public $timestamps = false;
    protected $primaryKey = 'id_pinjaman';

    public function Anggota(){
        return $this -> belongsTo('App\Anggota', 'id_anggota', 'id_anggota');
    }
}

//Belongs To Anggota
