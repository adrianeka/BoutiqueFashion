<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatabaseBarang extends Model
{
    use HasFactory;

    protected $table = 'database_barang';
    protected $primaryKey = 'ID';
    public $incrementing = false;

    protected $fillable = [
        'ID',
        'Kode_Barang',
        'kategori',
        'nama_barang',
        'harga_beli',
        'harga_jual',
        'unit'
    ];

    public function penjualanDetail()
    {
        return $this->hasMany(DatabasePenjualanDetail::class, 'ID', 'ID');
    }

    public function pembelianDetail()
    {
        return $this->hasMany(DatabasePembelianDetail::class, 'ID', 'ID');
    }
}
