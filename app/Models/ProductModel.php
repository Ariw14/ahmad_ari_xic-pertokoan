<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{

    protected $table = 'product';

    protected $fillable = [
        'nama_produk',
        'harga',
        'stok',
        'id_toko',
    ];

    public function toko(){
        return $this->belongsTo(TokoModel::class, 'id_toko');
    }
}
