<?php

namespace Database\Factories;

use App\Models\pesanan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<pesanan>
 */
class PesananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $layanan = layanan::query()->inRandomOrder()->first();
            if (!$layanan) {
                throw new \RuntimeException('Data layanan harus tersedia sebelum membuat pesanan.');
            }
            $jumlah = fake()->randomFloat(2, 1, 5);
        return [
            'layanan_id' => $layanan->id,
            'nama_pelanggan' => fake()->name(),
            'tanggal_masuk' => fake()->dateTimeBetween('-1 year', '-1 day')->format('Y-m-d'),
            'jumlah' => $jumlah,
            'total_biaya' => (int) round($layanan->tarif_per_satuan * $jumlah),
            'status' => 'selesai,'
        ];
    }
}
