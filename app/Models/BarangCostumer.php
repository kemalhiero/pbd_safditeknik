<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangCostumer extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_barang';
    protected $fillable = [
        'nama_barang',
    ];

    // one to many
    public function costumer()
    {
        return $this->belongsTo(Costumer::class, 'id_pelanggan');
    }

    // many to many
    public function pengecekan()
    {
        return $this->belongsToMany(Pengecekan::class, 'transaksi_barang_costumer', 'id_barang', 'no_pengecekan');
    }
}
