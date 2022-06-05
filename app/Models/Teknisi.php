<?php

namespace App\Models;

use App\Models\Pengecekan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teknisi extends Model
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
        'alamat',
        'no_hp',
    ];

    // one to many
    public function pengecekan()
    {
        return $this->hasMany('Pengecekan', 'id_teknisi');
    }
}
