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
        Schema::create('borrow_examples', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('peminjaman_kode');
            $table->unsignedInteger('buku_kode');
            $table->date('detail_tgl_kembali');
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
        Schema::dropIfExists('borrow_examples');
    }
};
