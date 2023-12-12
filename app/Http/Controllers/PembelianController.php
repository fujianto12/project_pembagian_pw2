<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use App\Models\Pakaian;
use App\Models\Pembelian;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembelian = Pembelian::all();
        return view("pembelian.index")->with("pembelians", $pembelian);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $supplier = Supplier::all();
        $pakaian = Pakaian::all();
        return view('pembelian.create')->with("supplier", $supplier)->with("pakaian", $pakaian);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "supplier_id" => "required",
            "tanggal_pembelian" => "required",
            "pakaian_id" => "required",
            "jumlah_pembelian" => "required",
            "harga_unit" => "required",
            "total_pembelian" => "required"
        ]);

        Pembelian::create($validasi);
        return redirect("pembelian")->with("success", "Data pembelian berhasil");
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembelian $pembelian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembelian $pembelian)
    {
        $pakaian = Pakaian::all();
        $supplier = Supplier::all();
        return view("pembelian.edit")->with("pembelian", $pembelian)->with("pakaian", $pakaian)->with("supplier", $supplier);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pembelian $pembelian)
    {
        $validasi = $request->validate([
            "supplier_id" => "required",
            "tanggal_pembelian" => "required",
            "pakaian_id" => "required",
            "jumlah_pembelian" => "required",
            "harga_unit" => "required",
            "total_pembelian" => "required"
        ]);
        $pembelian->update($validasi);
        return redirect("pembelian")->with("success", "Data pembelian berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pembelian = Pembelian::find($id);
        $pembelian -> delete();
        return redirect("pembelian")->with("success", "Data pembelian berhasil dihapus");
    }
}
