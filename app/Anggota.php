<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    //
    protected $table = 'anggota';
    public $timestamps = false;
    protected $primaryKey = 'id_anggota';
}

// anggota has many Angsuran,Pinjaman,Simpanan
