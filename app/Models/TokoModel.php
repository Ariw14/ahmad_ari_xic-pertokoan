<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TokoModel extends Model
{
    protected $table = 'toko';

    protected $fillable = [
        'nama_toko',
        'alamat',
        'nomor_telepon',
    ];

    public function produk(){
        return $this->hasMany(ProductModel::class);
    }
}
