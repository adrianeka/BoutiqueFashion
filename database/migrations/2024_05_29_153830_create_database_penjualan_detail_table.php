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
        Schema::create('database_penjualan_detail', function (Blueprint $table) {
            $table->string('kode_transaksi');
            $table->foreign('kode_transaksi')
                ->references('kode_transaksi')
                ->on('database_penjualan')
                ->onDelete('cascade');
            $table->string('ID');
            $table->foreign('ID')->references('ID')->on('database_barang');
            $table->string('kategori');
            $table->string('item');
            $table->string('unit_terjual');
            $table->decimal('harga');
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
        Schema::dropIfExists('database_penjualan_detail');
    }
};
