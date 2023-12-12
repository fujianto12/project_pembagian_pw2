<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use App\Models\Pakaian;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = Pesanan::all();
        return view("pesanan.index")->with("pesanans", $pesanan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pakaian = Pakaian::all();
        $costumer = Costumer::all();
        return view('pesanan.create')->with("pakaian", $pakaian)->with("costumer", $costumer);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "nomor_pesanan" => "required|unique:pesanans",
            "costumer_id" => "required",
            "tanggal_pesanan" => "required",
            "pakaian_id" => "required",
            "jumlah_pesanan" => "required",
            "total_harga" => "required"
        ]);

        Pesanan::create($validasi);
        dd($validasi);
        return redirect("pesanan")->with("success", "Data pesanan berhasil");
    }

    /**
     * Display the specified resource.
     */
    public function show(Pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pesanan $pesanan)
    {
        $pakaian = Pakaian::all();
        $costumer = Costumer::all();
        return view("pesanan.edit")->with("pesanan", $pesanan)->with("pakaian", $pakaian)->with("costumer", $costumer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pesanan $pesanan)
    {
        $validasi = $request->validate([
            "nomor_pesanan" => "required",
            "costumer_id" => "required",
            "tanggal_pesanan" => "required",
            "pakaian_id" => "required",
            "jumlah_pesanan" => "required",
            "total_harga" => "required"
        ]);
        $pesanan->update($validasi);
        // dd($pesanan);
        return redirect("pesanan")->with("success", "Data pesanan berhasil");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pesanan = Pesanan::find($id);
        $pesanan->delete();
        return redirect("pesanan")->with("success", "Data pesanan berhasil dihapus");
    }
}







// PILIH TOKO PAKAIAN  MELAKUKAN PESANAN ATAU PEMBELIAN ANTAR KE CONTROLLER 2 ITU
