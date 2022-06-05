<?php

namespace App\Models;

use App\Models\BarangCostumer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Costumer extends Model
{
    // use HasFactory;
    use SoftDeletes;

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at'
    ];

    protected $fillable = [
        'nama',
        'no_hp',
        'alamat',
    ];

    // one to many
    public function barang_costumer()
    {
        return $this->hasMany('BarangCostumer', 'id_pelanggan');
    }
}
