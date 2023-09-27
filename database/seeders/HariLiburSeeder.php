<?php

namespace Database\Seeders;

use App\Models\HariLibur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HariLiburSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $matkul = [
            [
                "nama" => "Libur Akhir Tahun",
                "mulai" => '2023-12-23 00:00:00',
                "akhir" => "2024-01-01 00:00:00"
            ],
            [
                "nama" => "Libur Semester Gasal",
                "mulai" => '2024-01-16 00:00:00',
                "akhir" => "2024-02-11 00:00:00"
            ],
            [
                "nama" => "Libur Idul Fitri",
                "mulai" => '2024-04-06 00:00:00',
                "akhir" => "2024-04-21 00:00:00"
            ],
            [
                "nama" => "Libur Semester Genap",
                "mulai" => '2024-06-25 00:00:00',
                "akhir" => "2024-08-18 00:00:00"
            ],
        ];
        foreach ($matkul as $vendor) {
            HariLibur::create([
                'nama' => $vendor['nama'],
                'mulai' => $vendor['mulai'],
                'akhir' => $vendor['akhir']
            ]);
        }
    }
}
