<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relation\BelongsTo;

class pesanan extends Model
{
    /** @use HasFactory<\Database\Factories\PesananFactory> */
    use HasFactory;
    protected $fillable = [
        'layanan_id',
        'nama_pelanggan',
        'tanggal_masuk',
        'jumlah',
        'total_biaya',
        'status',
    ];
    public function casts(): array
    {
        return [
            'tanggal_masuk' => 'date',
            'jumlah' => 'decimal',
            'total_biaya' => 'integer',
        ];
    }
    public function layanan(): BelongsTo
    {
        return $this->belongsTo(layanan::class);
    }
}
