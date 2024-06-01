<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseCustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('database_customer')->insert([
            ['kode_customer' => 'C001', 'nama_customer' => 'Auliya', 'alamat' => 'Jl. Cimindi', 'no_telp' => '082129765486'],
            ['kode_customer' => 'C002', 'nama_customer' => 'Putri', 'alamat' => 'Jl. Surapati', 'no_telp' => '081367849854'],
            ['kode_customer' => 'C003', 'nama_customer' => 'Setiawan', 'alamat' => 'Jl. Anggrek', 'no_telp' => '081478296598'],
            ['kode_customer' => 'C004', 'nama_customer' => 'Kurnia', 'alamat' => 'Jl. Djuanda', 'no_telp' => '089247792733'],
            ['kode_customer' => 'C005', 'nama_customer' => 'Sentosa', 'alamat' => 'Jl. Mawar', 'no_telp' => '081456379787'],
            ['kode_customer' => 'C006', 'nama_customer' => 'Aura', 'alamat' => 'Jl. Cibiru', 'no_telp' => '035745264872'],
            ['kode_customer' => 'C007', 'nama_customer' => 'Muthia', 'alamat' => 'Jl. Gunung Batu', 'no_telp' => '082548258999'],
            ['kode_customer' => 'C008', 'nama_customer' => 'Agista', 'alamat' => 'Jl. Lembang', 'no_telp' => '081290789497'],
        ]);
    }
}
