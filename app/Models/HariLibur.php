<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HariLibur extends Model
{
    use HasFactory;
    protected $table = "hari_libur";

    protected $fillable = [
        'nama',
        'mulai',
        'akhir'
    ];
    protected $casts = [
        "mulai" => 'datetime',
        "akhir" => 'datetime',
    ];
}
