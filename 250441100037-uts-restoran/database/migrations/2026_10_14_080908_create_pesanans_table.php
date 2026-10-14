<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id()->PrimaryKey();
            $table->foreignId('menu_id')->constrained('menus');
            $table->string('nama_pelanggan',100);
            $table->integer('nomor_meja');
            $table->integer('jumlah');
            $table->string('status')->Enum('diproses','selesai','dibatalkan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
