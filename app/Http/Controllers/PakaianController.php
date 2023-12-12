<?php

namespace App\Http\Controllers;

use App\Models\Pakaian;
use Illuminate\Http\Request;

class PakaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pakaian = Pakaian::all(); // select * from falkutas
        return view("pakaian.index")->with("pakaians", $pakaian);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pakaian.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "nama" => "required",
            "harga" => "required",
            "stok" => "required",
            // "foto" => "required|image"
        ]);
        // Ambil extensi file foto
        // $ext = $request->foto->getClientOriginalExtension();
        // // rename file foto menjadi npm.extensi (Contoh : 2125250001.jpg)
        // $validasi['foto'] = $request->nama . "." . $ext;
        // // upload file foto ke dalam folder public/foto
        // $request->foto->move(public_path('foto'), $validasi["foto"]);
        // simpan data mahasiswa ke tabel mahasiswa

        Pakaian::create($validasi);
        return redirect("pakaian")->with("success", "Data pakaian berhasil");
    }

    /**
     * Display the specified resource.
     */
    public function show(Pakaian $pakaian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pakaian = Pakaian::find($id);
        return view('pakaian.edit')->with('pakaian', $pakaian);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pakaian $pakaian)
    {
        $validasi = $request->validate([
            "nama" => "required",
            "harga" => "required",
            "stok" => "required",
            // "foto" => "image|nullable"
        ]);

        // if ($request->hasFile('foto')) {
        //     // Ambil extensi file foto
        //     $ext = $request->file('foto')->getClientOriginalExtension();
        //     // rename file foto menjadi nama.extensi (Contoh : 2125250001.jpg)
        //     $validasi['foto'] = $request->nama . "." . $ext;
        //     // upload file foto ke dalam folder public/foto
        //     $request->file('foto')->move(public_path('foto'), $validasi["foto"]);
        // }

        $pakaian->update($validasi);

        return redirect("pakaian")->with("success", "Data pakaian berhasil diubah");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pakaian = Pakaian::find($id);
        $pakaian->delete();
        return redirect("pakaian")->with("success", "Data pakaian berhasil dihapus");
    }
}
