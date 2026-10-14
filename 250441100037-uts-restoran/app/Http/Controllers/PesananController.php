<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Pesanan;
use Illuminate\Http\Request;


class PesananController
{
    /**
     * Display a listing of the resource.
     */
    public function store(Request $request)
    {
        // Langsung simpan semua inputan dari Postman/Form
        $menu = menu::create($request->all());

        return response()->json([
            'message' => 'menu berhasil di tambah',
            'data'    => $menu
        ], 201);
    }

    // 3. TAMPIL DETAIL 1 DATA (Show)
    public function show($id)
    {
        $menu = menu::with(['menu', 'pesanan'])->find($id);

        if (!$menu) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        return response()->json($menu, 200);
    }

    // 4. UBAH DATA (Update)
    public function update(Request $request, $id)
    {
        $menu = menu::find($id);

        if (!$menu) {
            return response()->json(['message' => 'menu tidak ditemukan'], 404);
        }

        // Langsung perbarui dengan inputan baru
        $menu->update($request->all());

        return response()->json([
            'message' => 'menu Berhasil Diperbarui',
            'data'    => $menu
        ], 200);
    }

    // 5. HAPUS DATA (Destroy)
    public function destroy($id)
    {
        $menu = menu::find($id);

        if (!$menu) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $menu->delete();

        return response()->json(['message' => 'menu Berhasil Dihapus'], 200);
    }
}

