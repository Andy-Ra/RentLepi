<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public $timestamps = false;

    protected $fillable = [
    'nama_barang',
    'id_merk',
    'id_kategori',
    'spesifikasi',
    'stok_tersedia',
    'harga',
    ];

    
}
