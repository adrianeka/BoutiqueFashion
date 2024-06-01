<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabasePembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('database_pembelian')->insert([
            ['kode_transaksi' => 'T001', 'tanggal_transaksi' => '2023-12-23', 'kode_vendor' => 'V001'],
            ['kode_transaksi' => 'T005', 'tanggal_transaksi' => '2024-05-31', 'kode_vendor' => 'V003'],
        ]);

        DB::table('database_pembelian_detail')->insert([
            [
                'kode_transaksi' => 'T001',
                'kode_barang' => 'BE-003',
                'jumlah' => 10,
            ],
            [
                'kode_transaksi' => 'T005',
                'kode_barang' => 'DO-002',
                'jumlah' => 5,
            ],
        ]);
    }
}
