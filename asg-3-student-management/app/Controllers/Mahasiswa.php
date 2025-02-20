<?php

namespace App\Controllers;

use App\Entities\Mahasiswa as EntitiesMahasiswa;
use App\Models\M_Mahasiswa as ModelsMahasiswa;

class Mahasiswa extends BaseController
{
    private $mhs_model;

    public function __construct()
    {
        $this->mhs_model = new ModelsMahasiswa();
    }

    public function index():string
    {
        $students = $this->mhs_model->getAllStudents();
        $parser = \Config\Services::parser();

        $temp = array();
        foreach($students as $row){
            array_push($temp, $row->toArray());
        }

        $dataArray = [
            'mahasiswa'=> $temp
        ];

        $data['content'] = $parser->setData($dataArray)->render('components/student_list', ['cache'=> 1800, 'cache_name'=>'student_list']);
        return view('students/v_mahasiswa', $data);
    }

    public function detail($nim):string
    {
        $studentsObject = $this->mhs_model->getStudentByNIM($nim);
        $parser = \Config\Services::parser();

        $students = $studentsObject->toArray();

        $students['academic_status_cell'] = view_cell('AcademicStatusCell', ['status'=>$students['status']], DAY, 'cache_academic_status');
        $students['latest_grades_cell'] = view_cell('LatestGradesCell', ['dataCourses'=>$students['courses']], HOUR*6, 'cache_grades_cell');

        $data['content'] = $parser->setData($students)->render('components/student_profile');
        return view('students/v_mahasiswa_detail', $data);
    }

    public function create():string
    {
        return view('students/v_mahasiswa_create');
    }

    public function update($nim):string
    {
        $data = $this->mhs_model->getStudentByNIM($nim);
        return view('students/v_mahasiswa_update', ['mahasiswa'=>$data]);
    }

    public function save_add()
    {
        $newData = new EntitiesMahasiswa( 
            $this->request->getVar('nim'),
            $this->request->getVar('nama'),
            $this->request->getVar('semester'),
            $this->request->getVar('gpa'),
            $this->request->getVar('program'),
            $this->request->getVar('status'),
        );
        $this->mhs_model->addStudent($newData);
        return redirect()->to('/');
    }

    public function save_update()
    {
        $newData = new EntitiesMahasiswa( 
            $this->request->getVar('nim'),
            $this->request->getVar('nama'),
            $this->request->getVar('semester'),
            $this->request->getVar('gpa'),
            $this->request->getVar('program'),
            $this->request->getVar('status'),
        );
        $this->mhs_model->updateMahasiswa($newData);
        return redirect()->to('/');
    }


    public function delete($nim)
    {
        $this->mhs_model->deleteMahasiswa($nim);
        return redirect()->to('/');
    }
}
