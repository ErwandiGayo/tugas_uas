<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $no =1;
        $Customer = Customer::all();
        return view('Customer.index',compact('Customer','no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Customer.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Customer = new Customer;
        $Customer->nama  = $request->nama;
        $Customer->alamat = $request->alamat;
        $Customer->hp = $request->hp;
        $Customer->save();

        return redirect('/Customer');
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
        $Customer = Customer::find($id);
        return view('Customer.edit', compact('Customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Customer = Customer::find($id);
        $Customer->nama = $request->nama;
        $Customer->alamat = $request->alamat;
        $Customer->hp= $request->hp;
        $Customer->save();
        return redirect('/Customer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Customer = Customer::find($id);
        $Customer->delete();
        return redirect('/Customer');
    }
}
