<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StudentGradesSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'student_id'            => '2301893013',
                'course_id'             => 'CRS001',
                'academic_year'         => 2025,
                'semester'              => 1,
                'status'                => 'ENROLLED'
            ],
        ];
        $this->db->table('student_grades')->insertBatch($data);
    }
}
