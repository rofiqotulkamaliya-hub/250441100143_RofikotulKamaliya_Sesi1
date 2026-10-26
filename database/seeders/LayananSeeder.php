<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        layanan::Insert{[
            [
                'kode_layanan' => 'LK-001',
                'nama_layanan' => 'Cuci Kering',
                'jenis' => 'kiloan',
                'tarif_per_satuan' => 6000,
            ],
            [
                'kode_layanan' => 'LK-002',
                'nama_layanan' => 'Cuci Setrika'
                'jenis' 
            ]
        ]}
    }
}
