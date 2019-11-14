<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengeluaran extends Model
{
    public $timestamps=false;

    protected $table="pengeluaran";

    protected $fillable=[' ','tanggalpengeluaran','aktivitaspengeluaran','keterangan','jumlahpengeluaran'];
}
