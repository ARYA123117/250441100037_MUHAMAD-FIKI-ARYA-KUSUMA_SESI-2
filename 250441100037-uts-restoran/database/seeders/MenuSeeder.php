<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\menu;


class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $menu = menu::create([
            'nama_menu'  => 'nasi goreng','soto ayam','ayam bakar','es teh','jus alpukat',
            'harga' => 25000,20000,28.000,5000,15000
        ]);
    }
}
