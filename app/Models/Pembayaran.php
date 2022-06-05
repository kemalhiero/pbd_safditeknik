<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $primaryKey = 'no_struk';
    protected $fillable = [
        'deskripsi_perbaikan',
        'modal_kerja',
        'pendapatan',
        'tanggal',
    ];
}
