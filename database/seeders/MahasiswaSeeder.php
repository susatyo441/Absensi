<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dosen = [
            [
                "nim" => "43321201",
                "nama" => "AFIF RAMZY BADRANI",
                "jenis_kelamin" => 'L',
                "email" => 'tes1@gmail.com',
                "status" => 1,
            ],
            [
                "nim" => "43321202",
                "nama" => "AJI DWI PRAKOSO",
                "jenis_kelamin" => 'L',
                "email" => 'tes2@gmail.com',
                "status" => 1,
            ],
            [
                "nim" => "43321203",
                "nama" => "ASHABUL KAHFI",
                "jenis_kelamin" => 'L',
                "email" => 'tes3@gmail.com',
                "status" => 1,
            ],
            [
                "nim" => "43321204",
                "nama" => "BINA SATRIA FAUZI",
                "jenis_kelamin" => 'L',
                "email" => 'tes4@gmail.com',
                "status" => 1,
            ],
            [
                "nim" => "43321205",
                "nama" => "BUKHARY AZRIELLOREZQA YUFAR",
                "jenis_kelamin" => 'L',
                "email" => 'tes5@gmail.com',
                "status" => 1,
            ],
            [
                "nim" => "43321206",
                "nama" => "EKA YULIANTO",
                "jenis_kelamin" => 'L',
                "email" => 'tes6@gmail.com',
                "status" => 1,
            ],
            [
                "nim" => "43321207",
                "nama" => "FAHIMA CHOIRUN NABILA",
                "jenis_kelamin" => 'P',
                "email" => 'tes7@gmail.com',
                "status" => 2,
            ],
            [
                "nim" => "43321208",
                "nama" => "FAUQA JAHFAL ISKANDAR",
                "jenis_kelamin" => 'L',
                "email" => 'tes8@gmail.com',
                "status" => 1,
            ],
            [
                "nim" => "43321209",
                "nama" => "GELORAWAN SUSATYO JATIPAMUNGKAS",
                "jenis_kelamin" => 'L',
                "email" => 'susatyo441@gmail.com',
                "status" => 1,
            ],
            [
                "nim" => "43321210",
                "nama" => "HENDI AHMAD SHOLEHUDIN",
                "jenis_kelamin" => 'L',
                "email" => 'tes10@gmail.com',
                "status" => 1,
            ],
            [
                "nim" => "43321212",
                "nama" => "ILHAM RIZKY HARIJANTO",
                "jenis_kelamin" => 'L',
                "email" => 'tes12@gmail.com',
                "status" => 1,
            ],
            [
                "nim" => "43321213",
                "nama" => "JOVAN ADHIK GUNAWAN",
                "jenis_kelamin" => 'L',
                "email" => 'tes13@gmail.com',
                "status" => 1,
            ],
            [
                "nim" => "43321214",
                "nama" => "JOYVA ALIANS TAMAM",
                "jenis_kelamin" => 'L',
                "email" => 'tes14@gmail.com',
                "status" => 1,
            ],
            [
                "nim" => "43321215",
                "nama" => "MIKO BAYU ANGGORO",
                "jenis_kelamin" => 'L',
                "email" => 'tes15@gmail.com',
                "status" => 1,
            ],
            [
                "nim" => "43321216",
                "nama" => "MUHAMMAD MIZZY",
                "jenis_kelamin" => 'L',
                "email" => 'tes16@gmail.com',
                "status" => 1,
            ],
            [
                "nim" => "43321217",
                "nama" => "MUHAMMAD NAUFAL SYARIFUDIN",
                "jenis_kelamin" => 'L',
                "email" => 'tes17@gmail.com',
                "status" => 1,
            ],
            [
                "nim" => "43321218",
                "nama" => "NATYA FAKHRI NUR PRASETYA",
                "jenis_kelamin" => 'L',
                "email" => 'tes18@gmail.com',
                "status" => 1,
            ],
            [
                "nim" => "43321219",
                "nama" => "RAKHMAT SATRIADI",
                "jenis_kelamin" => 'L',
                "email" => 'tes19@gmail.com',
                "status" => 1,
            ],
            [
                "nim" => "43321220",
                "nama" => "RIZKI PUTRI FITRIYANI",
                "jenis_kelamin" => 'P',
                "email" => 'tes20@gmail.com',
                "status" => 1,
            ],
            [
                "nim" => "43321221",
                "nama" => "RIZKI SHAUMI SABIQ",
                "jenis_kelamin" => 'L',
                "email" => 'tes21@gmail.com',
                "status" => 1,
            ],
            [
                "nim" => "43321223",
                "nama" => "TRI KUSUMA FARADILA",
                "jenis_kelamin" => 'P',
                "email" => 'tes23@gmail.com',
                "status" => 1,
            ],
            [
                "nim" => "43321224",
                "nama" => "YOEL RAGA ARI YORGA",
                "jenis_kelamin" => 'L',
                "email" => 'tes24@gmail.com',
                "status" => 3,
            ],
            [
                "nim" => "43321225",
                "nama" => "ZULFA NURMA NOVITA SARI",
                "jenis_kelamin" => 'P',
                "email" => 'tes25@gmail.com',
                "status" => 1,
            ],
        ];
        foreach ($dosen as $vendor) {
            Mahasiswa::create([
                'nim' => $vendor['nim'],
                'nama' => $vendor['nama'],
                'jenis_kelamin' => $vendor['jenis_kelamin'],
                'email' => $vendor['email'],
                'password' => bcrypt("admin12345"),
                'kelas' => "TI-3C",
                'status' => $vendor['status']
            ]);
        }
    }
}
