<?php

namespace App\Models;

use App\Models\TransaksiSparepart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sparepart extends Model
{
    // use HasFactory;
    use SoftDeletes;
    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at'
    ];

    protected $fillable = [
        'nama_sparepart',
        'harga_sparepart',
    ];

    //one to many
    public function transaksi_sparepart()
    {
        return $this->hasMany('TransaksiSparepart', 'id_sparepart');
    }
}
