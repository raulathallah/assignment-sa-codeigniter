<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Course extends Model
{
  protected $courses = [];

  public function __construct()
  {
    $this->courses = [
      ['courseId'=>1, 'courseName'=>'Networking'],
      ['courseId'=>2, 'courseName'=>'Database'],
      ['courseId'=>3, 'courseName'=>'Algorithm'],
      ['courseId'=>4, 'courseName'=>'Basic Programming'],
      ['courseId'=>5, 'courseName'=>'User Experience'],
    ];
    
  }
  
  public function getAllCourses()
  {
    return $this->courses;
  }

}
