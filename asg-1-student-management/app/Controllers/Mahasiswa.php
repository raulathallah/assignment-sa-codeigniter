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
        $data = $this->mhs_model->getAllStudents();
        return view('v_mahasiswa', ['mahasiswa'=>$data]);
    }

    public function detail($nim):string
    {
        $data = $this->mhs_model->getStudentByNIM($nim);
        return view('v_mahasiswa_detail', ['mahasiswa'=>$data]);
    }

    public function create():string
    {
        return view('v_mahasiswa_create');
    }

    public function update($nim):string
    {
        $data = $this->mhs_model->getStudentByNIM($nim);
        return view('v_mahasiswa_update', ['mahasiswa'=>$data]);
    }

    public function save_add()
    {
        $newData = new EntitiesMahasiswa( 
            $this->request->getVar('nim'),
            $this->request->getVar('nama'),
            $this->request->getVar('jurusan')
        );
        $this->mhs_model->addStudent($newData);
        return redirect()->to('/');
    }

    public function save_update()
    {
        $newData = new EntitiesMahasiswa( 
            $this->request->getVar('nim'),
            $this->request->getVar('nama'),
            $this->request->getVar('jurusan')
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
