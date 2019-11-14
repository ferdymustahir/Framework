<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pemasukan extends Model
{
    public $timestamps = false;

    protected $table="pemasukan";

    protected $fillable=['tanggalpemasukan','nama','aktivitaspemasukan','keterangan','jumlahpemasukan','foto'];

    
}
