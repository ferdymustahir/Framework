<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inventaris extends Model
{
    public $timestamps = false;

    protected $table="inventaris";
    protected $primarykey="id_inventaris";

    protected $fillable=['barang','jumlah','harga'];
}
