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
            ['kode_transaksi' => 'T001', 'tanggal_transaksi' => '2024-01-01', 'kode_vendor' => 'S001'],
            ['kode_transaksi' => 'T002', 'tanggal_transaksi' => '2024-01-02', 'kode_vendor' => 'S002'],
            ['kode_transaksi' => 'T003', 'tanggal_transaksi' => '2024-01-03', 'kode_vendor' => 'S003'],
            ['kode_transaksi' => 'T004', 'tanggal_transaksi' => '2024-01-04', 'kode_vendor' => 'S004'],
            ['kode_transaksi' => 'T005', 'tanggal_transaksi' => '2024-01-05', 'kode_vendor' => 'S005'],
        ]);

        DB::table('database_pembelian_detail')->insert([
            ['kode_transaksi' => 'T001', 'ID' => 6, 'jumlah' => 5, 'harga' => 100000],
            ['kode_transaksi' => 'T002', 'ID' => 7, 'jumlah' => 3, 'harga' => 150000],
            ['kode_transaksi' => 'T003', 'ID' => 8, 'jumlah' => 7, 'harga' => 200000],
            ['kode_transaksi' => 'T004', 'ID' => 9, 'jumlah' => 2, 'harga' => 180000],
            ['kode_transaksi' => 'T005', 'ID' => 10, 'jumlah' => 4, 'harga' => 220000]
        ]);
    }
}
