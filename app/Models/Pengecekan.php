<?php

namespace App\Models;

use App\Models\Teknisi;
use App\Models\Pembayaran;
use App\Models\TransaksiSparepart;
use App\Models\TransaksiBarangCostumer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengecekan extends Model
{
    // use HasFactory;
    use SoftDeletes;

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at'
    ];

    protected $fillable = [
        'deskripsi_pengecekan',
        'konfirmasi_pengecekan',
        'tanggal',
    ];

    //one to many
    public function transaksi_sparepart() 
    {
        return $this->hasMany('TransaksiSparepart', 'no_pengecekan');
    }

    public function teknisi()
    {
        return $this->belongsTo('Teknisi', 'id_teknisi', 'id');
    }

    public function transaksi_barang_customer() 
    {
        return $this->hasMany('TransaksiBarangCostumer', 'no_pengecekan');
    }

    // one to one
    public function pembayaran()
    {
        return $this->belongsTo('Pembayaran', 'no_struk', 'id');
    }

}
