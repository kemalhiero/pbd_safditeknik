<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pelanggan';
    protected $fillable = [
        'nama',
        'no_hp',
        'alamat',
    ];

    // one to many
    public function barang_costumer()
    {
        return $this->hasMany(BarangCostumer::class, 'id_pelanggan');
    }
}
