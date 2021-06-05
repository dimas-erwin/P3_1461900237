<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table='transaksi';
    protected $fillable = [
        'id',
        'id_nama',
        'id_barang',
        'id_alamat'
    ];
}