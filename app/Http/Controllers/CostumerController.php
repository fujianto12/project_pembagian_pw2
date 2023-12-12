<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use Illuminate\Http\Request;

class CostumerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $costumer = Costumer::all();
        return view("costumer.index")->with("costumers", $costumer);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('costumer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "nama" => "required",
            "no_telepon" => "required|unique:costumers",
            "jenis_kelamin" => "required",
            "alamat" => "required",
            "kota" => "required",
            "tanggal_lahir" => "required",
        ]);
        Costumer::create($validasi);
        return redirect("costumer")->with("success", "Data costumer berhasil");
    }

    /**
     * Display the specified resource.
     */
    public function show(Costumer $costumer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Costumer $costumer)
    {
        $costumer = Costumer::all();
        return view('costumer.edit')->with('costumer', $costumer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Costumer $costumer)
    {
        $validasi = $request->validate([
            "nama" => "required",
            "no_telepon" => "required",
            "jenis_kelamin" => "required",
            "alamat" => "required",
            "kota" => "required",
            "tanggal_lahir" => "required",
        ]);

        $costumer->update($validasi);
        return redirect("costumer")->with("success", "Data costumer berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $costumer = Costumer::find($id);
        $costumer -> delete();
        return redirect("costumer")->with("success", "Data costumer berhasil dihapus");
    }
}
