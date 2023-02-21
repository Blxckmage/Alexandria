<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'petugas_nama',
    ];

    public function borrowings()
    {
        return $this->hasMany(Borrowing::class);
    }

    public function registrationCards()
    {
        return $this->hasMany(RegistrationCard::class);
    }
}
