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
            ['kode_transaksi' => 'T005', 'kode_customer' => 'C003', 'tanggal' => '2024-01-01'],
            ['kode_transaksi' => 'T004', 'kode_customer' => 'C004', 'tanggal' => '2024-01-02'],
            ['kode_transaksi' => 'T003', 'kode_customer' => 'C002', 'tanggal' => '2024-01-03'],
            ['kode_transaksi' => 'T002', 'kode_customer' => 'C007', 'tanggal' => '2024-01-04'],
            ['kode_transaksi' => 'T001', 'kode_customer' => 'C001', 'tanggal' => '2024-01-05'],
            ['kode_transaksi' => 'T009', 'kode_customer' => 'C003', 'tanggal' => '2024-01-06'],
            ['kode_transaksi' => 'T008', 'kode_customer' => 'C002', 'tanggal' => '2024-01-07'],
            ['kode_transaksi' => 'T010', 'kode_customer' => 'C005', 'tanggal' => '2024-01-08'],
            ['kode_transaksi' => 'T007', 'kode_customer' => 'C004', 'tanggal' => '2024-01-09'],
            ['kode_transaksi' => 'T006', 'kode_customer' => 'C006', 'tanggal' => '2024-01-10'],
        ]);

        DB::table('database_penjualan_detail')->insert([
            [
                'kode_transaksi' => 'T004',
                'ID' => '13',
                'kategori' => 'R&B Fancy Sneakers',
                'item' => 'R&B Fancy',
                'unit_terjual' => 8,
                'harga' => 400000,
            ],
            [
                'kode_transaksi' => 'T005',
                'ID' => '10',
                'kategori' => 'Special Edition',
                'item' => 'Java X Japan',
                'unit_terjual' => 10,
                'harga' => 500000,
            ],
            [
                'kode_transaksi' => 'T006',
                'ID' => '30',
                'kategori' => 'Sneakers Chess',
                'item' => 'Brown',
                'unit_terjual' => 12,
                'harga' => 400000,
            ],
        ]);
    }
}
