<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $no =1;
        $Pesanan = Pesanan::all();
        return view('Pesanan.index',compact('Pesanan','no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pesanan.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Pesanan = new Pesanan;
        $brg->nama_brg = $request->nama_brg;
        $brg->harga = $request->harga;
        $brg->jenis = $request->jenis;
        $brg->save();

        return redirect('/barang');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $brg = Barang::find($id);
        return view('barang.edit', compact('brg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $brg = Barang::find($id);
        $brg->nama_brg = $request->nama_brg;
        $brg->harga = $request->harga;
        $brg->jenis = $request->jenis;
        $brg->save();

        return redirect('/barang');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brg = Barang::find($id);
        $brg-> delete();
        return redirect('/barang');
    }
}
