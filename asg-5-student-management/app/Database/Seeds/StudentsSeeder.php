<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

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
                'academic_status'       => 'active',
                'entry_year'            => '2025',
                'gpa'                   => 3.56,
                'created_at'            => new Time(),
                'updated_at'            => new Time(),
            ],
            [
                'student_id'            => '2301893244',
                'name'                  => 'Tatang B',
                'study_program'         => 'Computer Science',
                'current_semester'      => 1,
                'academic_status'       => 'active',
                'entry_year'            => '2025',
                'gpa'                   => 3.22,
                'created_at'            => new Time(),
                'updated_at'            => new Time(),
            ],
        ];
        $this->db->table('students')->insertBatch($data);
    }
}
