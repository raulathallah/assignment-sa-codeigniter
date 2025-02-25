<?php

namespace App\Controllers;

use App\Entities\Student;
use App\Models\CourseModel;
use App\Models\StudentModel;

class Home extends BaseController
{

    protected $studentModel;
    protected $courseModel;

    public function __construct()
    {
        $this->studentModel = new StudentModel();
        $this->courseModel = new CourseModel();
    }

    public function index(): string
    {
        try {
            $db = db_connect();
            $db->initialize();
            if ($db->connID) {
                echo "Connected to Database, ";
                print_r($db->getDatabase());
                echo '<br />';
            }


            //$students = $db->table('students');

            $studentAll = $this->studentModel->findAll();
            $courseAll = $this->courseModel->findAll();
            $studentById = $this->studentModel->find(1);

            // $newStudent = new Student([
            //     'student_id' => 'STD003',
            //     'name' => 'Kale K',
            //     'study_program' => 'Computer Science',
            //     'current_semester' => 0,
            //     'academic_status' => 'inactive',
            //     'entry_year' => 2025,
            //     'gpa' => 5.00
            // ]);

            // $this->studentModel->save($newStudent);



            // $result = $students
            //     ->select('student_id,name,entry_year,study_program')
            //     ->where('academic_status', 'ACTIVE')
            //     ->orderBy('student_id')
            //     ->get()
            //     ->getResult('array');
            //$result = $db->query('SELECT * FROM books')->getResult('array');
            // $sql1 = 'SELECT * FROM books WHERE bookid = ? AND category = ?';
            // $x = $db->query($sql1, [1, 'Romance'])->getResult('array');

            foreach ($courseAll as $row) {
                echo $row->code . ' - ' . $row->name . ' - ' . $row->credits;
                echo '<br />';
            }


            // $sql2 = "INSERT INTO locations (locationname) VALUES (?)";
            // $db->query($sql2, ['Surabaya']);

            // $sql3 = "UPDATE locations SET locationname = ? WHERE locationid = ?";
            // $db->query($sql3, ['Malang', 2]);

            // $sql3 = "DELETE FROM locations WHERE locationid = ?";
            // $db->query($sql3, [2]);

            // $sql = 'SELECT * FROM books WHERE bookid = ?';
            // $query = $db->query($sql, [30]);

        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }

        return view('welcome_message');
    }

    public function dashboard(): string
    {
        return view('admin/dashboard', ['pageTitle' => 'Admin Dashboard']);
    }
}
