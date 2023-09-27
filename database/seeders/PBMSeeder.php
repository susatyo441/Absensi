<?php

namespace Database\Seeders;

use App\Models\PBM;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PBMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $PBM = [
            [
                "nama" => "Joko Susilo",
                "email" => 'republik1256@gmail.com',
                "password" => "admin12345"
            ],
            [
                "nama" => "Jrx SID",
                "email" => 'susatyo441@gmail.com',
                "password" => "admin12345"
            ]
        ];
        foreach ($PBM as $vendor) {
            PBM::create([
                'nama' => $vendor['nama'],
                'email' => $vendor['email'],
                'password' => bcrypt($vendor['nama'])
            ]);
        }
    }
}
