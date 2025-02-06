<?php 
  namespace App\Models;

use App\Entities\Mahasiswa;
use CodeIgniter\Model;

  class M_Mahasiswa extends Model
  {
    private $mahasiswa = array();
    private $session;

    public function __construct()
    {
      $this->session = session();
      $this->mahasiswa = $this->session->get("mhs_session") ?? [];
    }

    public function getAllStudents()
    {
      return $this->mahasiswa;
    }

    public function getStudentByNIM($nim)
    {
      foreach($this->mahasiswa as $row){
        if($row->__get('nim') == $nim){
          return $row;
        }
      }
      return null;
    }

    public function addStudent(Mahasiswa $newMahasiswa){
      $this->mahasiswa[] = $newMahasiswa;
      $this->onSave();
    }

    public function deleteMahasiswa($nim){
      foreach($this->mahasiswa as $key => $row){
        if($row->__get('nim') == $nim){
          unset($this->mahasiswa[$key]);
          $this->onSave();
        }
      }
    }

    public function updateMahasiswa(Mahasiswa $newMahasiswa){
      foreach($this->mahasiswa as $key => $row){
        if($row->__get('nim') == $newMahasiswa->__get('nim')){
          $this->mahasiswa[$key] = $newMahasiswa;
          $this->onSave();
        }
      }
    }

    function onSave(){
      $this->session->set("mhs_session", $this->mahasiswa);
    }

  }
?>