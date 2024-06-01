<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseVendorSeeder extends Seeder
{
    public function run()
    {
        DB::table('database_vendor')->insert([
            ['kode_vendor' => 'V001', 'nama_vendor' => 'PT Indo Peixin', 'alamat' => 'Jl. Raya Jaten', 'no_telp' => '(0271) 821401'],
            ['kode_vendor' => 'V003', 'nama_vendor' => 'PT Concobiz Ventures', 'alamat' => 'Jl. Raya Serang', 'no_telp' => '(021) 54365002'],
            ['kode_vendor' => 'V004', 'nama_vendor' => 'PT Zensei Indonesia', 'alamat' => 'Jl. Daan Mogot', 'no_telp' => '(021) 5961785'],
            ['kode_vendor' => 'V005', 'nama_vendor' => 'PT Bayi Kiddy Indonesia', 'alamat' => 'Jl. Raya Pluit', 'no_telp' => '(021) 6684565'],
            ['kode_vendor' => 'V006', 'nama_vendor' => 'PT. Matahari', 'alamat' => 'Jl. Dipati Ukur', 'no_telp' => '(021) 6583122'],
        ]);
    }
}
