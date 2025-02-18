<?php
  namespace App\Entities;

  class Photos{
    private $nama;
    private $number;


    public function __construct(array $data)
    {
      $this->nama = $data['nama'] ?? '';
      $this->number = $data['number'] ?? '';
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
    //validation methods
  }
?>