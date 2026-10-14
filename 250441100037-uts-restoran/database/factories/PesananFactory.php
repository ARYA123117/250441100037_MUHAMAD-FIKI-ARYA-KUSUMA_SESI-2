<?php

namespace Database\Factories;

use App\Models\Pesanan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pesanan>
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
        return [
            'nama_pelanggan' => Pesanan::inRandomOrder()->first()->id ?? pesanan::factory(),
            'nomer_meja' => fake(),
            'jumlah' => fake()->name(),
            'status' => fake(),
        ]; 
    }
}
