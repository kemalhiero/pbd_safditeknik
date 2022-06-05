<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teknisi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_teknisi';
    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
    ];

    // one to many
    public function pengecekan()
    {
        return $this->hasMany(Pengecekan::class, 'id_teknisi');
    }
}
