<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relation\HasMany;

class layanan extends Model
{
    /** @use HasFactory<\Database\Factories\LayananFactory> */
    use HasFactory;
    protected $fillable = [
        'kode_layanan',
        'nama_layanan',
        'jenis',
        'tarif_per_satuan',
    ];

    public function pesanans():HasMany
    {
        return $this->hasMany(pesanan::class);
    }
}
