<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'peminjaman_kode',
        'buku_kode',
        'detail_tgl_kembali',
        'detail_denda',
        'detail_status_kembali',
    ];

    public function borrowing()
    {
        return $this->belongsTo(Borrowing::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
