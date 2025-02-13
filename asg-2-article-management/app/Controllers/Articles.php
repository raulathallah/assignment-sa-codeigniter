<?php

namespace App\Controllers;

use App\Entities\Article as EntitiesArticle;
use App\Models\M_Article;

class Articles extends BaseController
{
    private $articleModel;
    private $pageInformation = [
        'web_title' => 'Article',
    ];

    public function __construct()
    {
        $this->articleModel = new M_Article();
    }

    public function getIndex()
    {
        $data = $this->articleModel->getAllArticle();
        return view('article/index', 
            $this->pass_data([
                'title' => 'Article List',
                'articles' => $data
            ])
        );
    }

    public function getNew()
    {
        return view('article/form_new', 
            $this->pass_data([
                'title' => 'New Article Form'
            ])
        );
    }

    public function getEdit($id, $title)
    {
        $data = $this->articleModel->getArticleById($id, $title);
        return view('article/form_edit', 
            $this->pass_data([
                'title' => 'Edit Article Form',
                'article' => $data
            ])
        );
    }

    public function postCreate()
    {
        $data = $this->articleModel->getAllArticle();
        $new_article = new EntitiesArticle("".count($data) + 1, $this->request->getPost());
        $this->articleModel->addArticle($new_article);
        return redirect()->to('/articles');
    }

    public function putUpdate($id)
    {
        $new_article = new EntitiesArticle($id, $this->request->getPost());
        $this->articleModel->updateArticle($new_article);
        return redirect()->to('/articles');
    }

    public function getShow($id, $title)
    {
        $data = $this->articleModel->getArticleById($id, $title);
        return view('article/detail',  
            $this->pass_data([
                'article' => $data
            ])
        );
    }

    public function deleteRemove($id)
    {
        $this->articleModel->deleteArticle($id);
        return redirect()->to('/articles');
    }


    function pass_data(array $array){
        return array_merge($this->pageInformation, $array);
    }

}
