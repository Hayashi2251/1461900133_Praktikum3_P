<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;
use App\Models\Pelanggan;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $primaryKey = 'id';
    // protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'id_pelanggan',
        'id_barang'
    ];

    public function idBarang(){
        return $this->belongsTo(Barang::class, 'id_barang', 'id');
    }
    public function idPelanggan(){
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan', 'id');
    }
}
