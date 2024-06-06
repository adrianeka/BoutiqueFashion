<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatabasePenjualanDetail extends Model
{
    use HasFactory;

    protected $table = 'database_penjualan_detail';

    protected $fillable = [
        'kode_transaksi',
        'ID',
        'kategori',
        'item',
        'unit_terjual',
        'harga',
    ];

    public function penjualan()
    {
        return $this->belongsTo(DatabasePenjualan::class, 'kode_transaksi', 'kode_transaksi');
    }

    public function barang()
    {
        return $this->belongsTo(DatabaseBarang::class, 'ID', 'ID');
    }
}
