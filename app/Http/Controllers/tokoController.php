<?php

namespace App\Http\Controllers;

use App\Models\TokoModel;
use Illuminate\Http\Request;

class tokoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $toko = TokoModel::all();
        return view('toko.index', compact('toko'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('toko.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_toko' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
        ]);

        TokoModel::create([
            'nama_toko' => $request->nama_toko,
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon,
        ]);

        return redirect()->route('toko.index');
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
        $toko = TokoModel::findOrfail($id);

        return view('toko.edit', compact('toko'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $toko = TokoModel::findOrfail($id);

        $request->validate([
            'nama_toko' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
        ]);

        $toko->update([
            'nama_toko' => $request->nama_toko,
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon,
        ]);

        return redirect()->route('toko.index')->with('success, Toko has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $toko = TokoModel::findOrfail($id);
        $toko->delete();
        return redirect()->route('toko.index')->with('success, your toko has been delete');
    }
}
