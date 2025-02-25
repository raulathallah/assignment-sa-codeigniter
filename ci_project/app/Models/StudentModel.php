<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table            = 'students';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    //protected $returnType       = 'object';
    protected $returnType       = \App\Entities\Student::class;

    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'student_id',
        'name',
        'study_program',
        'current_semester',
        'academic_status',
        'entry_year',
        'gpa'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'current_semester'    => 'required|greater_than_equal_to[1]|less_than_equal_to[14]',
        'gpa'          => 'required|greater_than_equal_to[0.00]|less_than_equal_to[4.00]',
        'academic_status' => 'required|in_list[active, on leave, graduated]',
    ];
    protected $validationMessages   = [
        'current_semester' => [
            'required' => 'Semester is required',
            'greater_than_equal_to' => 'Semester must be greater or equal to 1',
            'less_than_equal_to' => 'Semester must be lesser or equal to 14',
        ],
        'gpa' => [
            'required' => 'GPA is required',
            'greater_than_equal_to' => 'Semester must be greater or equal to 0.00',
            'less_than_equal_to' => 'Semester must be lesser or equal to 4.00',
        ],
        'academic_status' => [
            'required' => 'Academic status is required',
            'in_list' => 'Academic status must be active, on leave, or graduated'
        ]
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
