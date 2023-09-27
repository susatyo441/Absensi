<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = [
            [
                "class_name" => "TI-3C",
                "nip_wali_kelas" => '199107302019031010',
                "id_jurusan" => 1
            ]
        ];
        foreach ($kelas as $vendor) {
            Kelas::create([
                'class_name' => $vendor['class_name'],
                'nip_wali_kelas' => $vendor['nip_wali_kelas'],
                'id_jurusan' => $vendor['id_jurusan']
            ]);
        }
    }
}
