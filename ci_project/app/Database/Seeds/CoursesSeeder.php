<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CoursesSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'code'      => 'CRS001',
                'name'      => 'Algorithm Programming',
                'credits'   => 6,
                'semester'  => 1,
            ],
            [
                'code'      => 'CRS002',
                'name'      => 'Database System',
                'credits'   => 4,
                'semester'  => 2,
            ],
            [
                'code'      => 'CRS003',
                'name'      => 'Python Programming',
                'credits'   => 2,
                'semester'  => 3,
            ],
            [
                'code'      => 'CRS004',
                'name'      => 'Java Programming',
                'credits'   => 2,
                'semester'  => 4,
            ],
        ];
        $this->db->table('courses')->insertBatch($data);
    }
}
