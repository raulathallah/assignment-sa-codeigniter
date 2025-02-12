<?php 
  namespace App\Models;

use App\Entities\Article;
use CodeIgniter\Model;

  class M_Article extends Model
  {
    private $article = array();
    private $session;

    public function __construct()
    {
      $this->session = session();
      $this->article = $this->session->get("article_session") ?? [];

    }

    public function getAllArticle()
    {
      return $this->article;
    }

    public function getArticleById($id, $title)
    {
      foreach($this->article as $row){
        if($row->id == $id && $row->title == $title){
          return $row;
        }
      }
      return null;
    }

    public function addArticle(Article $new){
      $this->article[] = $new;
      $this->onSave();
    }

    public function deleteArticle($id){
      foreach($this->article as $key => $row){
        if($row->id == $id){
          unset($this->article[$key]);
          $this->onSave();
        }
      }
    }

    public function updateArticle(Article $new){
      foreach($this->article as $key => $row){
        if($row->id == $new->id){
          $this->article[$key] = $new;
          $this->onSave();
        }
      }
    }

    function onSave(){
      $this->session->set("article_session", $this->article);
    }

  }
?>