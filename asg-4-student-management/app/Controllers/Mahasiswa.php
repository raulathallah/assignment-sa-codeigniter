<?php

namespace App\Controllers;

use App\Entities\Mahasiswa as EntitiesMahasiswa;
use App\Entities\Student;
use App\Models\M_Mahasiswa as ModelsMahasiswa;
use App\Models\StudentGradeModel;
use App\Models\StudentModel;

class Mahasiswa extends BaseController
{
    private $modelStudent;
    private $modelGrades;

    public function __construct()
    {
        $this->modelStudent = new StudentModel();
        $this->modelGrades = new StudentGradeModel();
    }

    public function index(): string
    {
        // $db = db_connect();
        // $db->initialize();
        // if ($db->connID) {
        //     echo "Connected to Database, ";
        //     print_r($db->getDatabase());
        //     echo '<br />';
        // }
        //$students = $this->mhs_model->getAllStudents();
        // $temp = array();
        // foreach ($students as $row) {
        //     array_push($temp, $row->toArray());
        // }

        $students = $this->modelStudent->findAll();

        // $students_courses = $db
        //     ->query('SELECT students.id, courses.name FROM courses 
        //         JOIN enrollments ON enrollments.course_id = courses.id 
        //         JOIN students ON enrollments.student_id = students.id
        //     GROUP BY students.id,')
        //     ->getResult('array');


        $parser = \Config\Services::parser();

        $dataArray = [
            'mahasiswa' => $students
        ];

        $data['content'] = $parser->setData($dataArray)->render('components/student_list', ['cache' => 1800, 'cache_name' => 'student_list']);
        return view('students/v_mahasiswa', $data);
    }

    public function detail($id): string
    {
        $db = db_connect();
        $db->initialize();



        //$studentsObject = $this->mhs_model->getStudentByNIM($nim);
        //$students = $studentsObject->toArray();
        $parser = \Config\Services::parser();
        $student = $this->modelStudent->find($id);

        $gradesTable = $db->table('student_grades');
        $gradesTable
            ->select('*')
            ->join('enrollments', 'student_grades.enrollment_id = enrollments.id')
            ->join('courses', 'enrollments.course_id = courses.id')
            ->where('enrollments.student_id', $id);
        $grades = $gradesTable->get()->getResult('array');


        $studentArray = $student->toArray();


        // $students_grades = $db
        //     ->query('SELECT * FROM courses 
        //         JOIN enrollments ON enrollments.course_id = courses.id 
        //         JOIN student_grades ON enrollments.id = student_grades.enrollment_id
        //         WHERE enrollments.student_id = $id
        //     ')
        //     ->getResult('array');

        $studentArray['academic_status_cell'] = view_cell('AcademicStatusCell', ['status' => $student->academic_status], DAY, 'cache_academic_status');
        $studentArray['latest_grades_cell'] = view_cell('LatestGradesCell', ['dataCourses' => $grades], HOUR * 6, 'cache_grades_cell');

        $data['content'] = $parser->setData($studentArray)->render('components/student_profile');
        return view('students/v_mahasiswa_detail', $data);
    }

    public function create(): string
    {
        $new = new Student();
        return view('students/v_mahasiswa_form', ['type' => 'Create', 'mahasiswa' => $new]);
    }

    public function update($id): string
    {
        //$data = $this->mhs_model->getStudentByNIM($nim);
        $data = $this->modelStudent->find($id);
        return view('students/v_mahasiswa_form', ['type' => 'Update', 'mahasiswa' => $data]);
    }

    public function save_add()
    {
        //$this->mhs_model->addStudent($newData);
        $data = new Student($this->request->getPost());

        //save to db
        $this->modelStudent->save($data);

        return redirect()->to('/');
    }

    public function save_update()
    {
        //$this->mhs_model->updateMahasiswa($newData);
        $data = new Student($this->request->getPost());

        //save to db
        $this->modelStudent->save($data);
        return redirect()->to('/');
    }


    public function delete($id)
    {
        //$this->mhs_model->deleteMahasiswa($nim);
        $this->modelStudent->delete($id);
        return redirect()->to('/');
    }
}
