<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dosen = [
            [
                "nip" => "199107302019031010",
                "nama" => "Nurseno Bayu Aji",
                "jenis_kelamin" => 'L',
                "email" => 'republik1256@gmail.com',
                "password" => "admin12345"
            ],
            [
                "nip" => "197203112000031002",
                "nama" => "Suko Tyas Pernanda",
                "jenis_kelamin" => 'L',
                "email" => 'susatyo441@gmail.com',
                "password" => "admin12345"
            ]
        ];
        foreach ($dosen as $vendor) {
            Dosen::create([
                'nip' => $vendor['nip'],
                'nama' => $vendor['nama'],
                'jenis_kelamin' => $vendor['jenis_kelamin'],
                'email' => $vendor['email'],
                'password' => bcrypt($vendor['nama'])
            ]);
        }
    }
}
