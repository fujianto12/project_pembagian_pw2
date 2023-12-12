<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier = Supplier::all();
        return view("supplier.index")->with("suppliers", $supplier);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "nama" => "required",
            "alamat" => "required",
            "kota" => "required",
            "kode_pos" => "required|unique:suppliers",
        ]);
        Supplier::create($validasi);
        return redirect("supplier")->with("success", "Data supllier berhasil");
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        $supplier = Supplier::all();
        return view('supplier.edit')->with('supplier', $supplier);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        $validasi = $request->validate([
            "nama" => "required",
            "alamat" => "required",
            "kota" => "required",
            "kode_pos" => "required",
        ]);

        $supplier->update($validasi);
        return redirect("supplier")->with("success", "Data supplier berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();
        return redirect("supplier")->with("success", "Data costumer berhasil dihapus");
    }
}
