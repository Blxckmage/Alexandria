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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kategori_kode')->constrained('categories')->onupdate('cascade')->ondelete('cascade');
            $table->foreignid('penerbit_kode')->constrained('publishers')->onupdate('cascade')->ondelete('cascade');
            $table->string('buku_judul');
            $table->unsignedBigInteger('buku_jumhal');
            $table->text('buku_deskripsi');
            $table->string('buku_pengarang');
            $table->unsignedInteger('buku_tahun_terbit');
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
        Schema::dropIfExists('books');
    }
};
