<?php

namespace App\Models;

use App\Models\Sparepart;
use App\Models\Pengecekan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransaksiSparepart extends Model
{
    // use HasFactory;
    use SoftDeletes;

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at'
    ];

    protected $fillable = [
        'jumlah_sparepart',
    ];

    //one to many
    public function sparepart()
    {
        return $this->belongsTo('Sparepart', 'id_sparepart', 'id');
    }

    public function pengecekan()
    {
        return $this->belongsTo('Pengecekan', 'no_pengecekan', 'id');
    }
}
