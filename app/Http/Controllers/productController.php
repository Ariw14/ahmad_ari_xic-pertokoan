<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use App\Models\TokoModel;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = ProductModel::with('toko')->latest()->paginate(5);
        return view('produk.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $toko = TokoModel::all();
        return view('produk.create', compact('toko'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_toko' => 'required',
            'nama_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        ProductModel::create([
            'id_toko' => $request->id_toko,
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);
        // dd($request->all());
        return redirect()->route('product.index')->with('success, your data product has been added!');
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
        $product = ProductModel::findOrfail($id);
        $toko = TokoModel::all();
        return view('produk.edit', compact('product', 'toko'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = ProductModel::findOrfail($id);

        $request->validate([
            'id_toko' => 'required',
            'nama_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        $product->update([
            'id_toko' => $request->id_toko,
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect()->route('product.index')->with('success, Toko has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = ProductModel::findOrfail($id);
        $product->delete();
        return redirect()->route('product.index')->with('success, your data product has been deleted');
    }
}
