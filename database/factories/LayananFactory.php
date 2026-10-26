<?php

namespace Database\Factories;

use App\Models\layanan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<layanan>
 */
class LayananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_layanan' => fake()->unique()->bothify('LX-###'),
            'nama_layanan' => fake()->words(2, true),
            'jenis' => fake()->randomElement(['kiloan', 'satuan']),
            'tarif_per_satuan' => fake()->numberBetween(5000, 50000),
        ];
    }
}
