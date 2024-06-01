<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabasePenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Penjualan data to be seeded
        DB::table('database_penjualan')->insert([
            ['kode_transaksi' => 'T003', 'tanggal_transaksi' => '2023-12-14', 'kode_customer' => 'C002'],
            ['kode_transaksi' => 'T004', 'tanggal_transaksi' => '2023-12-28', 'kode_customer' => 'C001'],
            ['kode_transaksi' => 'T005', 'tanggal_transaksi' => '2023-12-20', 'kode_customer' => 'C005'],
            ['kode_transaksi' => 'T006', 'tanggal_transaksi' => '2023-12-27', 'kode_customer' => 'C005'],
        ]);

        DB::table('database_penjualan_detail')->insert([
            [
                'kode_transaksi' => 'T004',
                'kode_barang' => 'BL-004',
                'jumlah' => 8,
            ],
            [
                'kode_transaksi' => 'T005',
                'kode_barang' => 'BE-005',
                'jumlah' => 10,
            ],
            [
                'kode_transaksi' => 'T006',
                'kode_barang' => 'BL-001',
                'jumlah' => 12,
            ],
        ]);
    }
}