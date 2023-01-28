<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use DB;
use Illuminate\Http\Request;

class AddBarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $merks = DB::select('SELECT * FROM merk_barangs');
        $kategoris = DB::select('SELECT * FROM kategori_barangs');
        return view('Admin/add-barang', ['merk'=>$merks, 'kategori' => $kategoris]);
    }

    public function add(Request $request)
    {
        $barang = new Barang;
        $barang->nama_barang = $request->nama;
        $barang->id_merk = $request->merk;
        $barang->id_kategori = $request->kategori;
        $barang->spesifikasi = $request->spec;
        $barang->stok_tersedia = $request->stock;
        $barang->harga = $request->harga;
        $barang->save();
        return redirect('/add-barang')->with('status', `Barang  $barang->nama_barang telah berhasil ditambahkan`);


    }
}
