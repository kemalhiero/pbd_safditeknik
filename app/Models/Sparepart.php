<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_sparepart';
    protected $fillable = [
        'nama_sparepart',
        'harga_sparepart',
    ];

    // many to many
    public function pengecekan()
    {
        return $this->belongsToMany(Pengecekan::class, 'transaksi_sparepart', 'id_sparepart', 'no_pengecekan');
    }
}
