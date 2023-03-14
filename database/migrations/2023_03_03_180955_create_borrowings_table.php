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
        Schema::create('borrowings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('petugas_kode')->nullable();
            $table->foreign('petugas_kode')
                ->references('id')
                ->on('users')
                ->when('users.roles', '=', 'employee');
            $table->foreignId('buku_kode')->constrained('books');
            $table->foreignId('peminjam_kode')->constrained('users');
            $table->date('peminjaman_tgl');
            $table->date('peminjaman_tgl_hrs_kembali')->nullable();
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
        Schema::dropIfExists('borrowings');
    }
};
