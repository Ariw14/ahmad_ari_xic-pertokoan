<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use App\Models\TokoModel;
use Illuminate\Http\Request;
use Laravel\Prompts\Support\Result;

class getdataController extends Controller
{
    public function index(){
        $product = ProductModel::latest()->paginate(5);
        $producttotal = ProductModel::all();
        $toko = TokoModel::latest()->paginate(5);
        $tokototal = TokoModel::all();
        $totalproduct = $producttotal->count();
        $totaltoko = $tokototal->count();
        return view('index', compact('totalproduct', 'totaltoko', 'product', 'toko'));
    }

    public function filterdata(Request $request){
        $tokoId = $request->query('id_toko');

        $toko = TokoModel::with('produk')->findOrFail($tokoId);

        $product = ProductModel::latest()->paginate(5);
        $producttotal = ProductModel::all();
        $toko = TokoModel::latest()->paginate(5);
        $tokototal = TokoModel::all();
        $totalproduct = $producttotal->count();
        $totaltoko = $tokototal->count();

        // $product = $toko->produk;

        return view('index', compact('toko', 'totalproduct', 'totaltoko', 'product', 'toko'));
    }   
}
