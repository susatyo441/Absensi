<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $matkul = [
            [
                "course_name" => "Data Mining",
                "nip_dosen" => '199107302019031010',
                "day" => "Tuesday",
                "start_hour" => "14:00:00"
            ],
            [
                "course_name" => "Desain & Perancangan Sistem Informasi",
                "nip_dosen" => '197203112000031002',
                "day" => "Friday",
                "start_hour" => "08:00:00"
            ],
        ];
        foreach ($matkul as $vendor) {
            Course::create([
                'course_name' => $vendor['course_name'],
                'nip_dosen' => $vendor['nip_dosen'],
                'day' => $vendor['day'],
                'start_hour' => $vendor['start_hour']
            ]);
        }
    }
}
