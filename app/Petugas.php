<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    //
    protected $table = "petugas_koperasi";
    protected $primaryKey = "id_petugas";
    public $timestamps = false;
}
