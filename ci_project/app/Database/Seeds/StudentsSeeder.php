<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StudentsSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'student_id'            => '2301893013',
                'name'                  => 'Jodi B',
                'study_program'         => 'Computer Science',
                'current_semester'      => 1,
                'academic_status'       => 'ACTIVE',
                'entry_year'            => '2025',
                'gpa'                   => 3.56,
            ],
            [
                'student_id'            => '2301994823',
                'name'                  => 'Tatang B',
                'study_program'         => 'Information System',
                'current_semester'      => 2,
                'academic_status'       => 'INACTIVE',
                'entry_year'            => '2025',
                'gpa'                   => 2.98,
            ],
        ];
        $this->db->table('students')->insertBatch($data);
    }
}
