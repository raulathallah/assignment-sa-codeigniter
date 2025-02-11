<?php

namespace App\Controllers;

use App\Entities\Article as EntitiesArticle;
use App\Models\M_Article;

class Article extends BaseController
{
    private $articleModel;
    private $pageInformation = [
        'web_title' => 'Article',
    ];

    public function __construct()
    {
        $this->articleModel = new M_Article();
    }

    public function index()
    {
        $data = $this->articleModel->getAllArticle();
        return view('article/index', 
            $this->pass_data([
                'title' => 'Article List',
                'articles' => $data
            ])
        );
    }

    public function new()
    {
        return view('article/form_new', 
            $this->pass_data([
                'title' => 'New Article Form'
            ])
        );
    }

    public function create()
    {
        $data = $this->articleModel->getAllArticle();
        $new_article = new EntitiesArticle("".count($data) + 1, $this->request->getPost());

        $this->articleModel->addArticle($new_article);
        return redirect()->to('/article');
    }

    public function show($id)
    {
        $data = $this->articleModel->getArticleById($id);
        return view('article/detail',  
            $this->pass_data([
                'article' => $data
            ])
        );
    }

    public function delete($id)
    {
        $this->articleModel->deleteArticle($id);
        return redirect()->to('/article');
    }


    function pass_data(array $array){
        return array_merge($this->pageInformation, $array);
    }

}
