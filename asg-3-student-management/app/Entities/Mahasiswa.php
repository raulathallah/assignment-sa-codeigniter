<?php
  namespace App\Entities;

use CodeIgniter\I18n\Time;

  class Mahasiswa{
    private $nim;
    private $nama;
    private $semester;
    private $gpa;
    private $program;
    private $status;
    private $courses = [];

    public function __construct($nim, $nama, $semester, $gpa, $program, $status)
    {
      $this->nim = $nim;
      $this->nama = $nama;
      $this->semester = $semester;
      $this->program = $program;
      $this->gpa = $gpa;
      $this->status = $status;
      $this->courses = [
        ['courseId'=>1, 'courseName'=>'Networking', 'joinDate'=> '2024-02-03', 'grades'=> 'A'],
        ['courseId'=>2, 'courseName'=>'Database', 'joinDate'=> '2024-12-04', 'grades'=> 'C-'],
        ['courseId'=>3, 'courseName'=>'Algorithm', 'joinDate'=> '2024-06-12', 'grades'=> 'B+'],
        ['courseId'=>4, 'courseName'=>'Basic Programming', 'joinDate'=> '2024-02-06', 'grades'=> 'A'],
        ['courseId'=>5, 'courseName'=>'User Experience', 'joinDate'=> '2024-01-05', 'grades'=> 'B-'],
      ];
    }

    public function __get($atribute) {
      if (property_exists($this, $atribute)) {
        return $this->$atribute;
      }
    }
      
    public function __set($atribut, $value){
      if (property_exists($this, $atribut)) 
      {
        $this->$atribut = $value;
      }  
    }

    function getFullInfo(){
      return $this->nim." - ".$this->nama." - ".$this->program;
    }

    public function toArray(){
      return [
        'nim'=>$this->nim,
        'nama'=>$this->nama,
        'semester'=>$this->semester,
        'gpa'=>$this->gpa,
        'program'=>$this->program,
        'status'=>$this->status,
        'courses'=>$this->courses
      ];
    }
  }
?>






