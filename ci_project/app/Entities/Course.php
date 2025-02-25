<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Course extends Entity
{
    protected $attributes = [
        'id'        => null,
        'code'      => null,
        'name'      => null,
        'credits'   => null,
        'semester'  => null,
    ];
    protected $casts   = [
        'id'        => 'integer',
        'credits'   => 'integer',
        'semester'  => 'integer'
    ];
    //protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
}
