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
            ['kode_customer' => 'C001', 'nama_customer' => 'Toni Irawan',   'alamat' => 'Jl. Melati', 'city' => 'Bandung', 'postal_code' => '40132', 'country' => 'Indonesia', 'no_telp' => '812578902', 'Customer_since' => '2023-09-13', 'created_at' => now(), 'updated_at' => now()],
            ['kode_customer' => 'C002', 'nama_customer' => 'Citra Kinanti', 'alamat' => 'Jl. Melawai', 'city' => 'Bandung', 'postal_code' => '40132', 'country' => 'Indonesia', 'no_telp' => '813556981', 'Customer_since' => '2023-10-15', 'created_at' => now(), 'updated_at' => now()],
            ['kode_customer' => 'C003', 'nama_customer' => 'Dani Sutanto',  'alamat' => 'Jl. Melati', 'city' => 'Bandung', 'postal_code' => '40132', 'country' => 'Indonesia', 'no_telp' => '814578547', 'Customer_since' => '2023-11-17', 'created_at' => now(), 'updated_at' => now()],
            ['kode_customer' => 'C004', 'nama_customer' => 'Riani Sari',    'alamat' => 'Jl. Juanda', 'city' => 'Bandung', 'postal_code' => '40133', 'country' => 'Indonesia', 'no_telp' => '815578243', 'Customer_since' => '2023-12-18', 'created_at' => now(), 'updated_at' => now()],
            ['kode_customer' => 'C005', 'nama_customer' => 'Tanto Wiyahya', 'alamat' => 'Jl. Mawar', 'city' => 'Bandung', 'postal_code' => '40134', 'country' => 'Indonesia', 'no_telp' => '816583548', 'Customer_since' => '2023-12-27', 'created_at' => now(), 'updated_at' => now()],
            ['kode_customer' => 'C006', 'nama_customer' => 'Ria Riani',     'alamat' => 'Jl. waru', 'city' => 'Jakarta', 'postal_code' => '40123', 'country' => 'Indonesia', 'no_telp' => '878263758', 'Customer_since' => '2024-05-31', 'created_at' => now(), 'updated_at' => now()],
            ['kode_customer' => 'C007', 'nama_customer' => 'Rani Riani',    'alamat' => 'Jl melati', 'city' => 'Jakarta', 'postal_code' => '40159', 'country' => 'Indonesia', 'no_telp' => '5356364', 'Customer_since' => '2024-05-31', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
