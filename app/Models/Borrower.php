<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    use HasFactory;

    protected $fillable = [
        'peminjam_nama',
        'peminjam_alamat',
        'peminjam_telp',
        'peminjam_foto',
    ];

    public function registrationCards()
    {
        return $this->hasMany(RegistrationCard::class);
    }

    public function borrowings()
    {
        return $this->hasMany(Borrowing::class);
    }
}
