<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseVendorSeeder extends Seeder
{
    public function run()
    {
        DB::table('database_vendor')->insert([
            ['kode_vendor' => 'S001', 'nama_vendor' => 'PT Granville', 'alamat' => 'Jl. Kelapa Gading', 'kota' => 'Jakarta', 'kode_pos' => '10110', 'provinsi' => 'DKI Jakarta', 'no_telp' => '(021) 2333122', 'fax' => '022-343767', 'email' => 'gran@granville.co.id', 'kategori' => 'Shoes', 'created_at' => now(), 'updated_at' => now()],
            ['kode_vendor' => 'S002', 'nama_vendor' => 'PT Akresindo', 'alamat' => 'Jl. Abdul Muis', 'kota' => 'Jakarta', 'kode_pos' => '10110', 'provinsi' => 'DKI Jakarta', 'no_telp' => '(021) 3514015', 'fax' => '022-554378', 'email' => 'akre@akresindo.co.id', 'kategori' => 'Shoes', 'created_at' => now(), 'updated_at' => now()],
            ['kode_vendor' => 'S003', 'nama_vendor' => 'PT Ciarmy', 'alamat' => 'Jl. Bintaro', 'kota' => 'Jakarta', 'kode_pos' => '10110', 'provinsi' => 'DKI Jakarta', 'no_telp' => '(021) 7661785', 'fax' => '022-875432', 'email' => 'ciar@ciarmy.co.id', 'kategori' => 'Shoes', 'created_at' => now(), 'updated_at' => now()],
            ['kode_vendor' => 'S004', 'nama_vendor' => 'PT Venamon', 'alamat' => 'Jl. Diponegoro', 'kota' => 'Jakarta', 'kode_pos' => '10110', 'provinsi' => 'DKI Jakarta', 'no_telp' => '(021) 57365002', 'fax' => '022-385348', 'email' => 'ven@venamon.co.id', 'kategori' => 'Shoes', 'created_at' => now(), 'updated_at' => now()],
            ['kode_vendor' => 'S005', 'nama_vendor' => 'PT Primarindo', 'alamat' => 'Jl. Cakung', 'kota' => 'Jakarta', 'kode_pos' => '10110', 'provinsi' => 'DKI Jakarta', 'no_telp' => '(021) 7984565', 'fax' => '022-754783', 'email' => 'prima@primarindo.co.id', 'kategori' => 'Shoes', 'created_at' => now(), 'updated_at' => now()],
            ['kode_vendor' => 'S006', 'nama_vendor' => 'PT Jaya Waru', 'alamat' => 'Jl Tambun', 'kota' => 'Jakarta', 'kode_pos' => '10110', 'provinsi' => 'DKI JKT', 'no_telp' => '022-62835', 'fax' => '8153891', 'email' => 'jaya@waru.go.id', 'kategori' => 'Shoes', 'created_at' => now(), 'updated_at' => now()],
            ['kode_vendor' => 'S007', 'nama_vendor' => 'PT Jaya Abadi', 'alamat' => 'Jl Kenanga', 'kota' => 'Jakarta', 'kode_pos' => '10110', 'provinsi' => 'DKI Jakarta', 'no_telp' => '022-9748578', 'fax' => '8364875', 'email' => 'jaya@abadi.go.id', 'kategori' => 'Shoes', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
