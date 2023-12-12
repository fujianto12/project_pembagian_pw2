<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'pembelians';

    protected $fillable = [
        'supplier_id',
        'tanggal_pembelian',
        'pakaian_id',
        'jumlah_pembelian',
        'jumlah_pesanan',
        'harga_unit',
        'total_pembelian',
    ];

    public function pakaian()
    {
        return $this->belongsTo(Pakaian::class, 'pakaian_id');
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }
}
