<?php
  namespace App\Entities;

  class Article{
    private $id;
    private $title;
    private $content;

    public function __construct($id, array $data)
    {
      $this->id = $id;
      $this->title = $data['title'] ?? '';
      $this->content = $data['content'] ?? '';
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
  }
?>






