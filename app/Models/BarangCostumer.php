<?php

namespace App\Models;

use App\Models\Costumer;
use App\Models\TransaksiBarangCostumer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BarangCostumer extends Model
{
    // use HasFactory;
    use SoftDeletes;
    
    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at'
    ];

    protected $fillable = [
        'nama_barang',
    ];

    // one to many
    public function transaksi_barang_customer()
    {
        return $this->hasMany('TransaksiBarangCostumer', 'id_barang');
    }

    public function customer()
    {
        return $this->belongsTo('Costumer', 'id_pelanggan', 'id');
    }
}
