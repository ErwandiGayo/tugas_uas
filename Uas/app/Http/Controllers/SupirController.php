<?php

namespace App\Http\Controllers;
use App\Models\Supir;

use Illuminate\Http\Request;

class SupirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $no =1;
        $supir = Supir::all();
        return view('supir.index',compact('supir','no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supir.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $supir = new Supir;
        $supir->nama_supir = $request->nama_supir;
        $supir->alamat = $request->alamat;
        $supir->telp = $request->telp;
        $supir->no_ktp = $request->no_ktp;
        $supir->save();

        return redirect('/supir');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $supir = Supir::find($id);
        return view('supir.edit', compact('supir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $supir = Supir::find($id);
        $supir->nama_supir = $request->nama_supir;
        $supir->alamat = $request->alamat;
        $supir->telp = $request->telp;
        $supir->no_ktp = $request->no_ktp;
        $supir->save();
        return redirect('/supir');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $supir = Supir::find($id);
        $supir->delete();
        return redirect('/supir');
    }
}
