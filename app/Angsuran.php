<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Angsuran extends Model
{
    //
    protected $table = "angsuran";
    protected $primaryKey = "id_angsuran";
    public $timestamps = false;

    public function Kategori(){
        return $this -> belongsTo('App\Kategori', 'id_kategori', 'id_kategori');
    }

    public function Anggota(){
        return $this -> belongsTo('App\Anggota', 'id_anggota', 'id_anggota');
    }
}
