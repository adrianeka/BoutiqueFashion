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
        Schema::create('database_pembelian_detail', function (Blueprint $table) {
            $table->string('kode_transaksi');
            $table->foreign('kode_transaksi')
                ->references('kode_transaksi')
                ->on('database_pembelian')
                ->onDelete('cascade');
            $table->string('ID');
            $table->foreign('ID')
                ->references('ID')
                ->on('database_barang')
                ->onDelete('cascade');
            $table->integer('jumlah');
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
        Schema::dropIfExists('database_pembelian_detail');
    }
};
