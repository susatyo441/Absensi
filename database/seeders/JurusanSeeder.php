<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jurusan = [
            [
                "nama" => "Teknik Elektro"
            ],
            [
                "nama" => "Teknik Sipil"
            ],
            [
                "nama" => "Teknik Mesin"
            ],
            [
                "nama" => "Teknik Akuntansi"
            ],
            [
                "nama" => "Teknik Administrasi Bisnis"
            ]
        ];
        foreach ($jurusan as $vendor) {
            Jurusan::create([
                'nama' => $vendor['nama']
            ]);
        }
    }
}
