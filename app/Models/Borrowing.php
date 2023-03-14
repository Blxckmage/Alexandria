<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasFactory;

    protected $fillable = [
        'petugas_kode',
        'buku_kode',
        'peminjam_kode',
        'peminjaman_tgl',
        'peminjaman_tgl_hrs_kembali',
        'detail_denda',
        'detail_status_kembali',
    ];

    public function borrower()
    {
        return $this->belongsTo(Borrower::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'peminjam_kode');
    }

    public function details()
    {
        return $this->hasMany(BorrowDetail::class, 'peminjaman_kode');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'buku_kode');
    }
}
