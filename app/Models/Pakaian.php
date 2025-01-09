<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pakaian extends Model
{
    use HasFactory;

    protected $table = 'table_pakaian';

    protected $fillable = [
        'nama_pakaian', 'kategori', 'harga'
    ];
}
