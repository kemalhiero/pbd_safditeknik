<?php

namespace App\Models;

use App\Models\Pengecekan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembayaran extends Model
{
    // use HasFactory;
    use SoftDeletes;

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at'
    ];

    protected $fillable = [
        'deskripsi_perbaikan',
        'modal_kerja',
        'pendapatan',
        'tanggal',
    ];

    public function pengecekan()
    {
        return $this->hasOne('Pengecekan', 'no_struk');
    }
}
