<?php

namespace App\Models;

use CodeIgniter\Model;

class CourseModel extends Model
{
    protected $table            = 'courses';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    //protected $returnType       = 'array';
    protected $returnType       = \App\Entities\Course::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'code',
        'name',
        'credits',
        'semester'
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
    //protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'code'      => 'required|exact_length[8]',
        //name
        'credits'   => 'required|greater_than_equal_to[1]|less_than_equal_to[6]',
        'semester'  => 'required|greater_than_equal_to[1]|less_than_equal_to[8]'
    ];
    protected $validationMessages   = [
        'code' => [
            'required' => 'Course code is required',
            'exact_length' => 'Course code need to be exactly 8 character'
        ],
        'credits' => [
            'required' => 'Credits is required',
            'greater_than_equal_to' => 'Credits must be greater than or equal to 1',
            'less_than_equal_to' => 'Credits must be lesser than or equal to 6',
        ],
        'semester' => [
            'required' => 'Semester is required',
            'greater_than_equal_to' => 'Semester must be greater than or equal to 1',
            'less_than_equal_to' => 'Semester must be lesser than or equal to 8',
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
