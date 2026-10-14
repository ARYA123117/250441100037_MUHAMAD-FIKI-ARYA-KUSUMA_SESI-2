<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pesanan extends Model
{
    use HasFactory;

    protected $fillable = ['nama_pelanggan,nomo_meja,jumlah,total_harga,status'];

    public function menus()
    {
        return $this->belongsTo(menu::class, 'menu_id');
    }
    
}
