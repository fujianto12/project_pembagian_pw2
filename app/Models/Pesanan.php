<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'pesanans';

    protected $fillable = [
        'nomor_pesanan',
        'costumer_id',
        'tanggal_pesanan',
        'pakaian_id',
        'jumlah_pesanan',
        'total_harga'


    ];

    public function costumer()
    {
        return $this->belongsTo(Costumer::class, 'costumer_id');
    }
    public function pakaian()
    {
        return $this->belongsTo(Pakaian::class, 'pakaian_id');
    }
}
