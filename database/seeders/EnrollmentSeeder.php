<?php

namespace Database\Seeders;

use App\Models\Enrollment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $enroll = [
            [
                "class_name" => "TI-3C",
                "course_id" => 1
            ],
            [
                "class_name" => "TI-3C",
                "course_id" => 2
            ],
        ];
        foreach ($enroll as $vendor) {
            Enrollment::create([
                'class_name' => $vendor['class_name'],
                'course_id' => $vendor['course_id']
            ]);
        }
    }
}
