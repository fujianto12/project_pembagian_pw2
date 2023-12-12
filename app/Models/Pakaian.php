<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pakaian extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'pakaians';

    protected $fillable = [
        'nama',
        'harga',
        'foto',
        'stok'
    ];

}
