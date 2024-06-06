<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatabaseCustomer extends Model
{
    use HasFactory;

    protected $table = 'database_customer';
    protected $primaryKey = 'kode_customer';
    public $incrementing = false;

    protected $fillable = [
        'kode_customer',
        'nama_customer',
        'alamat',
        'city',
        'postal_code',
        'country',
        'no_telp',
        'customer_since'
    ];


    public function penjualan()
    {
        return $this->hasMany(DatabasePenjualan::class, 'kode_customer', 'kode_customer');
    }
}
