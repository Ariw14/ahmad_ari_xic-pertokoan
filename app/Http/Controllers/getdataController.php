<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use App\Models\TokoModel;
use Illuminate\Http\Request;

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

    public function filterdata(){
        // $product = ProductModel::select('id_toko')->distinct()->get();
        // $angkatanfilter = ProductModel::all();

        // $alumnis = Alumni::query();
        

        // if ($angkatan_id) {
        //     $alumnis->where('angkatan_id', $angkatan_id);
        // }
    }   
}
