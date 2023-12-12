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
        Schema::create('pembelians', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');

            $table->uuid('supplier_id');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->restrictOnDelete()->restrictOnUpdate();

            $table->date('tanggal_pembelian');

            $table->uuid('pakaian_id');
            $table->foreign('pakaian_id')->references('id')->on('pakaians')->restrictOnDelete()->restrictOnUpdate();

            $table->integer('jumlah_pembelian');
            $table->string('harga_unit');
            $table->string('total_pembelian');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelians');
    }
};
