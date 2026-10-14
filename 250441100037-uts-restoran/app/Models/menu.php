<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class menu extends Model
{
    use HasFactory;

    protected $fillable = ['nama_menu,jenis,harga'];

    public function menu()
    {
        return $this->hasmany(Pesanan::class, 'menu_id');
    }
}
