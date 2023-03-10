<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasFactory;

    protected $fillable = [
        'petugas_kode',
        'peminjam_kode',
        'peminjaman_tgl',
        'peminjaman_tgl_harus_kembali',
    ];

    public function borrower()
    {
        return $this->belongsTo(Borrower::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function details()
    {
        return $this->hasMany(BorrowDetail::class, 'peminjaman_kode');
    }
}
