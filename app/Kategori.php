<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //
    protected $table = "Kategori_pinjaman";
    protected $primaryKey = "id_kategori";
    public $timestamps = false;
}
//Belongs To Angsr
