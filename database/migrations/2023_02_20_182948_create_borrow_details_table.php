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
        Schema::create('borrow_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('peminjaman_kode')->constrained('borrowings');
            $table->foreignId('buku_kode')->constrained('books');
            $table->date('detail_tgl_kembali')->references('peminjaman_tgl_hrs_kembali')->on('borrowings');
            $table->double('detail_denda');
            $table->boolean('detail_status_kembali');
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
        Schema::dropIfExists('borrow_details');
    }
};
