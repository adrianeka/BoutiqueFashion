<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseBarangSeeder extends Seeder
{
    public function run()
    {
        DB::table('database_barang')->insert(
            [
                ['ID' => 6, 'Kode_Barang' => 'PLB-002', 'kategori' => 'Megamendung Series', 'nama_barang' => 'Black White(BETA)', 'harga_jual' => 350000, 'harga_beli' => 300000, 'unit' => 50],
                ['ID' => 7, 'Kode_Barang' => 'PLB-002', 'kategori' => 'Megamendung Series', 'nama_barang' => 'Red Blue (REZA)', 'harga_jual' => 350000, 'harga_beli' => 300000, 'unit' => 50],
                ['ID' => 8, 'Kode_Barang' => 'PLB-002', 'kategori' => 'Megamendung Series', 'nama_barang' => 'Purple Yellow (CIKA)', 'harga_jual' => 350000, 'harga_beli' => 300000, 'unit' => 50],
                ['ID' => 9, 'Kode_Barang' => 'PLB-002', 'kategori' => 'Megamendung Series', 'nama_barang' => 'Pink Tosca (RAIN)', 'harga_jual' => 350000, 'harga_beli' => 300000, 'unit' => 50],
                ['ID' => 10, 'Kode_Barang' => 'PLB-002', 'kategori' => 'Megamendung Series', 'nama_barang' => 'Blue White (CLOUD)', 'harga_jual' => 350000, 'harga_beli' => 300000, 'unit' => 50],
                ['ID' => 11, 'Kode_Barang' => 'PBK-003', 'kategori' => 'Ship Mix Series', 'nama_barang' => 'Ship Mix', 'harga_jual' => 400000, 'harga_beli' => 350000, 'unit' => 50],
                ['ID' => 12, 'Kode_Barang' => 'PBK-003', 'kategori' => 'Ship Mix Series', 'nama_barang' => 'Paris Mix', 'harga_jual' => 400000, 'harga_beli' => 350000, 'unit' => 50],
                ['ID' => 13, 'Kode_Barang' => 'PBK-003', 'kategori' => 'Ship Mix Series', 'nama_barang' => 'Melbourne Mix', 'harga_jual' => 400000, 'harga_beli' => 350000, 'unit' => 50],
                ['ID' => 14, 'Kode_Barang' => 'PBK-003', 'kategori' => 'Ship Mix Series', 'nama_barang' => 'Java Mix', 'harga_jual' => 400000, 'harga_beli' => 350000, 'unit' => 50],
                ['ID' => 15, 'Kode_Barang' => 'PBK-003', 'kategori' => 'Ship Mix Series', 'nama_barang' => 'London Mix', 'harga_jual' => 400000, 'harga_beli' => 350000, 'unit' => 50],
                ['ID' => 16, 'Kode_Barang' => 'PMN-004', 'kategori' => 'R&B Fancy Series', 'nama_barang' => 'R&B Fancy', 'harga_jual' => 350000, 'harga_beli' => 300000, 'unit' => 50],
                ['ID' => 17, 'Kode_Barang' => 'PMN-004', 'kategori' => 'R&B Fancy Series', 'nama_barang' => 'Pop Fancy', 'harga_jual' => 350000, 'harga_beli' => 300000, 'unit' => 50],
                ['ID' => 18, 'Kode_Barang' => 'PMN-004', 'kategori' => 'R&B Fancy Series', 'nama_barang' => 'K-Pop Fancy', 'harga_jual' => 350000, 'harga_beli' => 300000, 'unit' => 50],
                ['ID' => 19, 'Kode_Barang' => 'PMN-004', 'kategori' => 'R&B Fancy Series', 'nama_barang' => 'Rock Fancy', 'harga_jual' => 350000, 'harga_beli' => 300000, 'unit' => 50],
                ['ID' => 20, 'Kode_Barang' => 'PMN-004', 'kategori' => 'R&B Fancy Series', 'nama_barang' => 'Classic Fancy', 'harga_jual' => 350000, 'harga_beli' => 300000, 'unit' => 50],
                ['ID' => 26, 'Kode_Barang' => 'TOS-006', 'kategori' => 'Sneakers Chess', 'nama_barang' => 'Black', 'harga_jual' => 400000, 'harga_beli' => 350000, 'unit' => 50],
                ['ID' => 27, 'Kode_Barang' => 'TOS-006', 'kategori' => 'Sneakers Chess', 'nama_barang' => 'Blue', 'harga_jual' => 400000, 'harga_beli' => 350000, 'unit' => 50],
                ['ID' => 28, 'Kode_Barang' => 'TOS-006', 'kategori' => 'Sneakers Chess', 'nama_barang' => 'Red', 'harga_jual' => 400000, 'harga_beli' => 350000, 'unit' => 50],
                ['ID' => 29, 'Kode_Barang' => 'TOS-006', 'kategori' => 'Sneakers Chess', 'nama_barang' => 'Brown', 'harga_jual' => 400000, 'harga_beli' => 350000, 'unit' => 50],
                ['ID' => 30, 'Kode_Barang' => 'TOS-006', 'kategori' => 'Sneakers Chess', 'nama_barang' => 'Grey', 'harga_jual' => 400000, 'harga_beli' => 350000, 'unit' => 50],
                ['ID' => 46, 'Kode_Barang' => 'ASL-010', 'kategori' => 'Special Edition', 'nama_barang' => 'Java X Japan', 'harga_jual' => 500000, 'harga_beli' => 450000, 'unit' => 50],
                ['ID' => 47, 'Kode_Barang' => 'ASL-010', 'kategori' => 'Special Edition', 'nama_barang' => 'Wibawa', 'harga_jual' => 500000, 'harga_beli' => 450000, 'unit' => 50],
                ['ID' => 48, 'Kode_Barang' => 'ASL-010', 'kategori' => 'Special Edition', 'nama_barang' => 'Dinas Simple', 'harga_jual' => 425000, 'harga_beli' => 375000, 'unit' => 50],
                ['ID' => 49, 'Kode_Barang' => 'ASL-010', 'kategori' => 'Special Edition', 'nama_barang' => 'Skechers Slip', 'harga_jual' => 425000, 'harga_beli' => 375000, 'unit' => 50],
                ['ID' => 50, 'Kode_Barang' => 'ASL-010', 'kategori' => 'Special Edition', 'nama_barang' => 'Simple Shoes', 'harga_jual' => 325000, 'harga_beli' => 275000, 'unit' => 50],
            ]
        );
    }
}
