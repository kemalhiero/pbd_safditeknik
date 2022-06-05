<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengecekan extends Model
{
    use HasFactory;
    protected $primaryKey = 'no_pengecekan';
    protected $fillable = [
        'deskripsi_pengecekan',
        'konfirmasi_pengecekan',
        'tanggal',
    ];
}
