<?php
  namespace App\Entities;

  class Mahasiswa{
    private $nim;
    private $nama;
    private $jurusan;

    public function __construct($nim, $nama, $jurusan)
    {
      $this->nim = $nim;
      $this->nama = $nama;
      $this->jurusan = $jurusan;
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
      return $this->nim." - ".$this->nama." - ".$this->jurusan;
    }
  }
?>






