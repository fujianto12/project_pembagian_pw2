<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'costumers';

    protected $fillable = [
        'nama',
        'no_telepon',
        'jenis_kelamin',
        'alamat',
        'kota',
        'tanggal_lahir',
    ];
}
