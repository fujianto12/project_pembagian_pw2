<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('nomor_pesanan');


            $table->uuid('costumer_id');
            $table->foreign('costumer_id')->references('id')->on('costumers')->restrictOnDelete()->restrictOnUpdate();


            $table->date('tanggal_pesanan');


            $table->uuid('pakaian_id');
            $table->foreign('pakaian_id')->references('id')->on('pakaians')->restrictOnDelete()->restrictOnUpdate();

            $table->integer('jumlah_pesanan');
            $table->string('total_harga');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
