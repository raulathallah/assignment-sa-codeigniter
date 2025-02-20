<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_Course;
use CodeIgniter\HTTP\ResponseInterface;

class Academic extends BaseController
{
    private $course_model;

    public function __construct()
    {
        $this->course_model = new M_Course();
    }

    public function index()
    {
        $courses = $this->course_model->getAllCourses();
        $table = new \CodeIgniter\View\Table();

        $table->addRow(['ID', 'Course']);
        foreach($courses as $row){
            $table->addRow($row);
        }

        $data = $table->generate();
        return view('academic/v_course', ['table'=>$data], ['cache'=> DAY, 'cache_name'=>'cache_course_list']);
    }

    public function getAcademicStatistic()
    {
        $courses = $this->course_model->getAllCourses();

        $data = count($courses);

        return view('academic/v_academic_statistic', ['count'=>$data], ['cache'=> MINUTE * 0.5, 'cache_name'=>'cache_academic_statistic']);
    }

}