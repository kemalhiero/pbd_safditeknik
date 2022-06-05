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

    // one to one
    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class, 'no_struk');
    }

    // one to many
    public function teknisi()
    {
        return $this->belongsTo(Teknisi::class, 'id_teknisi');
    }

    // many to many
    public function sparepart()
    {
        return $this->belongsToMany(Sparepart::class, 'transaksi_sparepart', 'no_pengecekan', 'id_sparepart');
    }

    public function barang_costumer()
    {
        return $this->belongsToMany(BarangCostumer::class, 'transaksi_barang_costumer', 'no_pengecekan', 'id_barang');
    }
}
