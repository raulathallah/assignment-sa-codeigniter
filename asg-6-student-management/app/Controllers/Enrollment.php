<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\Course;
use App\Entities\Enrollment as EntitiesEnrollment;
use App\Libraries\DataParams;
use App\Models\CourseModel;
use App\Models\EnrollmentModel;
use App\Models\StudentModel;
use CodeIgniter\HTTP\ResponseInterface;

class Enrollment extends BaseController
{
    private $modelEnrollment;
    private $modelCourse;
    private $modelStudent;
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
        $this->db->initialize();

        $this->modelEnrollment = new EnrollmentModel();
        $this->modelCourse = new CourseModel();
        $this->modelStudent = new StudentModel();
    }

    public function index()
    {

        $isAdmin = 0;

        foreach (user()->getRoles() as $role) {
            if ($role == 'admin') {
                $isAdmin++;
            }
        }

        //
        $params = new DataParams([
            'search' => $this->request->getGet('search'),
            //'sort' => $this->request->getGet('sort'),
            //'order' => $this->request->getGet('order'),
            'page' => $this->request->getGet('page_courses'),
            'perPage' => $this->request->getGet('perPage')
        ]);
        $result = $this->modelEnrollment->getFilteredEnrollments($params);

        $data = [
            'enrollments' => $result['enrollments'],
            'pager' => $result['pager'],
            'total' => $result['total'],
            'params' => $params,
            'baseUrl' => $isAdmin == 1 ? base_url('admin/enrollments') : base_url('enrollments'),
            'type' => $isAdmin == 1 ? 'admin' : ''
        ];

        return view('enrollments/v_enrollments', $data);
    }

    public function create(): string
    {
        $new = new EntitiesEnrollment();
        $courses = $this->modelCourse->findAll();
        $students = $this->modelStudent->findAll();
        return view('enrollments/v_enrollments_form', ['action' => 'store', 'enrollment' => $new, 'courses' => $courses, 'students' => $students]);
    }

    public function store()
    {
        $data = new EntitiesEnrollment($this->request->getPost());

        $course = $this->modelCourse->find($this->request->getPost('course_id'));

        $data->id = null;
        $data->status = 'active';
        $data->semester = $course->semester;

        $store = $this->modelEnrollment->save($data);

        if (!$store) {
            // Output any error (like if save failed)
            dd($this->modelEnrollment->errors());
        }

        session()->setFlashdata('success', 'Enrollments berhasil disimpan');
        return redirect()->to('admin/enrollments');
    }
}
