<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Mahasiswa extends Model
{
    use HasFactory, Notifiable;

    protected $table = "mahasiswa";

    protected $fillable = [
        'nim',
        'nama',
        'jenis_kelamin',
        'email',
        'password',
        'kelas',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];
}
