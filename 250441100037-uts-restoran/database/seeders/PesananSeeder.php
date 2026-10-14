<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\pesanan;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $pesanan = pesanan::create([
            'menu_id' => 1,2,3,4,5,
            'nama_pelanggan'=> 'budi,ani',
            'nomor_meja' => 2,3,
            'jumlah' => 2,3,
            'status' => 'diproses,selesai'
        ]);
    }
}
