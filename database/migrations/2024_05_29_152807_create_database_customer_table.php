<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('database_customer', function (Blueprint $table) {
            $table->string('kode_customer')->primary();
            $table->string('nama_customer');
            $table->string('alamat');
            $table->string('city');
            $table->string('postal_code');
            $table->string('country');
            $table->string('no_telp');
            $table->date('Customer_since');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('database_customer');
    }
};
