<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori_kode',
        'penerbit_kode',
        'buku_judul',
        'buku_jumhal',
        'buku_deskripsi',
        'buku_pengarang',
        'buku_tahun_terbit',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }
}
