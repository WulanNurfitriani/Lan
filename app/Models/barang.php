<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_barang';

    protected $fillable = [
        'id_barang',
        'nama_produk',
        'merk',
        'harga',
        'image',
        'created_at',
        'update_at',
    ];
}
