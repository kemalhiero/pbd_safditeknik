<?php

namespace App\Models;

use App\Models\Pengecekan;
use App\Models\BarangCostumer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransaksiBarangCostumer extends Model
{
    // use HasFactory;
    use SoftDeletes;

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at'
    ];

    protected $fillable = [
        'jumlah',
    ];

    // one to many
    public function pengecekan()
    {
        return $this->belongsTo('Pengecekan', 'no_pengecekan', 'id');
    }

    public function barang_customer()
    {
        return $this->belongsTo('BarangCostumer', 'id_barang', 'id');
    }

}
