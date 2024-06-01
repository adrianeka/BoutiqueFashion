<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseBarangSeeder extends Seeder
{
    public function run()
    {
        DB::table('database_barang')->insert([
            ['kode_barang' => 'BE-002', 'kategori' => 'Belt', 'nama_barang' => 'White Belt', 'harga_beli' => 180000, 'unit' => -5, 'harga_jual' => 220000],
            ['kode_barang' => 'BE-003', 'kategori' => 'Belt', 'nama_barang' => 'Black Belt', 'harga_beli' => 170000, 'unit' => 180, 'harga_jual' => 210000],
            ['kode_barang' => 'BE-004', 'kategori' => 'Belt', 'nama_barang' => 'Choco Belt', 'harga_beli' => 200000, 'unit' => 30, 'harga_jual' => 235000],
            ['kode_barang' => 'BE-005', 'kategori' => 'Belt', 'nama_barang' => 'Pink Belt', 'harga_beli' => 200000, 'unit' => 0, 'harga_jual' => 250000],
            ['kode_barang' => 'BL-001', 'kategori' => 'Blouse', 'nama_barang' => 'White Blouse', 'harga_beli' => 400000, 'unit' => 72, 'harga_jual' => 450000],
            ['kode_barang' => 'BL-002', 'kategori' => 'Blouse', 'nama_barang' => 'Blue Blouse', 'harga_beli' => 350500, 'unit' => 50, 'harga_jual' => 425000],
            ['kode_barang' => 'BL-003', 'kategori' => 'Blouse', 'nama_barang' => 'Choco Blouse', 'harga_beli' => 380000, 'unit' => 50, 'harga_jual' => 430000],
            ['kode_barang' => 'BL-004', 'kategori' => 'Blouse', 'nama_barang' => 'Maroon Blouse', 'harga_beli' => 350000, 'unit' => 26, 'harga_jual' => 460000],
            ['kode_barang' => 'BL-005', 'kategori' => 'Blouse', 'nama_barang' => 'Black Blouse', 'harga_beli' => 300000, 'unit' => 50, 'harga_jual' => 435000],
            ['kode_barang' => 'DO-001', 'kategori' => 'Docmart', 'nama_barang' => 'Choco Docmart', 'harga_beli' => 400000, 'unit' => 30, 'harga_jual' => 540000],
            ['kode_barang' => 'DO-002', 'kategori' => 'Docmart', 'nama_barang' => 'Black Docmart', 'harga_beli' => 420000, 'unit' => 50, 'harga_jual' => 545000],
            ['kode_barang' => 'DO-003', 'kategori' => 'Docmart', 'nama_barang' => 'Maroon Docmart', 'harga_beli' => 450000, 'unit' => 50, 'harga_jual' => 535000],
            ['kode_barang' => 'DO-004', 'kategori' => 'Docmart', 'nama_barang' => 'White Docmart', 'harga_beli' => 380000, 'unit' => 50, 'harga_jual' => 530000],
            ['kode_barang' => 'DO-005', 'kategori' => 'Docmart', 'nama_barang' => 'Snow Docmart', 'harga_beli' => 430000, 'unit' => 50, 'harga_jual' => 550000],
            ['kode_barang' => 'DR-001', 'kategori' => 'Dress', 'nama_barang' => 'Moca Dress', 'harga_beli' => 450000, 'unit' => 50, 'harga_jual' => 570000],
            ['kode_barang' => 'DR-002', 'kategori' => 'Dress', 'nama_barang' => 'Choco Dress', 'harga_beli' => 400000, 'unit' => 50, 'harga_jual' => 540000],
            ['kode_barang' => 'DR-003', 'kategori' => 'Dress', 'nama_barang' => 'Green Dress', 'harga_beli' => 460000, 'unit' => 50, 'harga_jual' => 565000],
            ['kode_barang' => 'DR-004', 'kategori' => 'Dress', 'nama_barang' => 'White Dress', 'harga_beli' => 425000, 'unit' => 50, 'harga_jual' => 550000],
            ['kode_barang' => 'DR-005', 'kategori' => 'Dress', 'nama_barang' => 'Grey Dress', 'harga_beli' => 380000, 'unit' => 50, 'harga_jual' => 545000],
            ['kode_barang' => 'FL-001', 'kategori' => 'Flat Shoes', 'nama_barang' => 'Green Shoes', 'harga_beli' => 350000, 'unit' => 50, 'harga_jual' => 500000],
            ['kode_barang' => 'FL-002', 'kategori' => 'Flat Shoes', 'nama_barang' => 'White Shoes', 'harga_beli' => 420000, 'unit' => 50, 'harga_jual' => 540000],
            ['kode_barang' => 'FL-003', 'kategori' => 'Flat Shoes', 'nama_barang' => 'Blue Shoes', 'harga_beli' => 400000, 'unit' => 50, 'harga_jual' => 535000],
            ['kode_barang' => 'FL-004', 'kategori' => 'Flat Shoes', 'nama_barang' => 'Black Shoes', 'harga_beli' => 380000, 'unit' => 50, 'harga_jual' => 520000],
            ['kode_barang' => 'FL-005', 'kategori' => 'Flat Shoes', 'nama_barang' => 'Maroon Shoes', 'harga_beli' => 410000, 'unit' => 50, 'harga_jual' => 550000],
            ['kode_barang' => 'HI-001', 'kategori' => 'High Heels', 'nama_barang' => 'White Heels', 'harga_beli' => 500000, 'unit' => 110, 'harga_jual' => 570000],
            ['kode_barang' => 'HI-002', 'kategori' => 'High Heels', 'nama_barang' => 'Moca Heels', 'harga_beli' => 500000, 'unit' => 50, 'harga_jual' => 575000],
            ['kode_barang' => 'HI-003', 'kategori' => 'High Heels', 'nama_barang' => 'Green Heels', 'harga_beli' => 500000, 'unit' => 50, 'harga_jual' => 560000],
            ['kode_barang' => 'HI-004', 'kategori' => 'High Heels', 'nama_barang' => 'Maroon Heels', 'harga_beli' => 400000, 'unit' => 50, 'harga_jual' => 535000],
            ['kode_barang' => 'HI-005', 'kategori' => 'High Heels', 'nama_barang' => 'Blue Heels', 'harga_beli' => 450000, 'unit' => 50, 'harga_jual' => 545000],
            ['kode_barang' => 'SK-001', 'kategori' => 'Skirt', 'nama_barang' => 'Choco Skirt', 'harga_beli' => 300000, 'unit' => 50, 'harga_jual' => 350000],
            ['kode_barang' => 'SK-002', 'kategori' => 'Skirt', 'nama_barang' => 'White Skirt', 'harga_beli' => 260000, 'unit' => 50, 'harga_jual' => 355000],
            ['kode_barang' => 'SK-003', 'kategori' => 'Skirt', 'nama_barang' => 'Moca Skirt', 'harga_beli' => 250000, 'unit' => 50, 'harga_jual' => 340000],
            ['kode_barang' => 'SK-004', 'kategori' => 'Skirt', 'nama_barang' => 'Blue Skirt', 'harga_beli' => 280000, 'unit' => 50, 'harga_jual' => 335000],
            ['kode_barang' => 'SK-005', 'kategori' => 'Skirt', 'nama_barang' => 'Army Skirt', 'harga_beli' => 285000, 'unit' => 50, 'harga_jual' => 340000],
            ['kode_barang' => 'SU-001', 'kategori' => 'Suit', 'nama_barang' => 'Blue Suit', 'harga_beli' => 650000, 'unit' => 50, 'harga_jual' => 800000],
            ['kode_barang' => 'SU-002', 'kategori' => 'Suit', 'nama_barang' => 'White Suit', 'harga_beli' => 700000, 'unit' => 50, 'harga_jual' => 860000],
            ['kode_barang' => 'SU-003', 'kategori' => 'Suit', 'nama_barang' => 'Pink Suit', 'harga_beli' => 670000, 'unit' => 50, 'harga_jual' => 845000],
            ['kode_barang' => 'SU-004', 'kategori' => 'Suit', 'nama_barang' => 'Choco Suit', 'harga_beli' => 685000, 'unit' => 50, 'harga_jual' => 850000],
            ['kode_barang' => 'SU-005', 'kategori' => 'Suit', 'nama_barang' => 'Green Suit', 'harga_beli' => 640000, 'unit' => 50, 'harga_jual' => 810000],
            ['kode_barang' => 'SW-001', 'kategori' => 'Sweater', 'nama_barang' => 'Choco Sweater', 'harga_beli' => 250000, 'unit' => 50, 'harga_jual' => 340000],
            ['kode_barang' => 'SW-002', 'kategori' => 'Sweater', 'nama_barang' => 'Maroon Sweater', 'harga_beli' => 240000, 'unit' => 50, 'harga_jual' => 345000],
            ['kode_barang' => 'SW-003', 'kategori' => 'Sweater', 'nama_barang' => 'Black Sweater', 'harga_beli' => 235000, 'unit' => 50, 'harga_jual' => 330000],
            ['kode_barang' => 'SW-004', 'kategori' => 'Sweater', 'nama_barang' => 'Green Sweater', 'harga_beli' => 280000, 'unit' => 50, 'harga_jual' => 335000],
            ['kode_barang' => 'SW-005', 'kategori' => 'Sweater', 'nama_barang' => 'Blue Sweater', 'harga_beli' => 99000, 'unit' => 50, 'harga_jual' => 320000],
            ['kode_barang' => 'TR-001', 'kategori' => 'Trousers', 'nama_barang' => 'White', 'harga_beli' => 200000, 'unit' => 50, 'harga_jual' => 270000],
            ['kode_barang' => 'TR-002', 'kategori' => 'Trousers', 'nama_barang' => 'Maroon', 'harga_beli' => 210000, 'unit' => 50, 'harga_jual' => 260000],
            ['kode_barang' => 'TR-003', 'kategori' => 'Trousers', 'nama_barang' => 'Black', 'harga_beli' => 220000, 'unit' => 50, 'harga_jual' => 265000],
            ['kode_barang' => 'TR-004', 'kategori' => 'Trousers', 'nama_barang' => 'Grey', 'harga_beli' => 190000, 'unit' => 50, 'harga_jual' => 255000],
            ['kode_barang' => 'TR-005', 'kategori' => 'Trousers', 'nama_barang' => 'Moca', 'harga_beli' => 220000, 'unit' => 50, 'harga_jual' => 275000],
        ]);
    }
}
