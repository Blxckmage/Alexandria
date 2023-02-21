<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;

    protected $fillable = [
        'penerbit_nama',
        'penerbit_alamat',
        'penerbit_telp',
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
