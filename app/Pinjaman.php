<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pinjaman extends Model
{
    //
    protected $table = 'pinjaman';
    public $timestamps = false;
    protected $primaryKey = 'id_pinjaman';
}
