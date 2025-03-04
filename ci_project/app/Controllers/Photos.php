<?php

namespace App\Controllers;

use App\Entities\Photos as EntitiesPhotos;
use CodeIgniter\RESTful\ResourceController;

class Photos extends ResourceController
{
    protected $helpers = ['form', 'url', 'text', 'date', 'photos'];
    protected $renderer;

    public function __construct()
    {
        // Load helper secara manual
        helper($this->helpers);
        $this->renderer = service('renderer');
    }

    public function getIndex()
    {
        //echo current_url();
        $price = 50000;
        // $data = [
        //     'id'=> 1,
        //     'name' => "Nasi Goreng"
        // ];

        // $rule = [
        //     'id' => 'integer',
        //     'name' => 'required|max_length[255]'
        // ];

        // if(! $this->validateData($data, $rule)){
        //     //dd($this->validator->getErrors());
        //     echo "ERROR!";
        // }

        //echo format_price($result);

        // if(cache()->get('my_cached_view')){
        //     echo "Cache tersedia.";
        // }

        // --TABLE
        //$table = new \CodeIgniter\View\Table();

        // $dataTable = [
        //     ['Nama', 'Price'],
        //     ['Nama'=>'Photo 1', 'Price'=> 200000],
        //     ['Nama'=>'Photo 2', 'Price'=> 300000],
        //     ['Nama'=>'Photo 3', 'Price'=> 350000],
        // ];

        // foreach($dataTable as $row){
        //     $table->addRow($row);
        // }

        //$data['table'] = $table->generate($dataTable);


        //dd(cache()->get('my_cached_view'));
        //$this->renderer->setViewPath(APPPATH . 'Views');

        //--RENDERER
        // $this->renderer->setData($data);
        // $this->renderer->setVar('variable', 'PHOTO LIST');
        // return $this->renderer->render('photos/index');

        //--DYNAMIC
        //$template = '<div><h2>Dynamic Render String</h2></div>';
        //return $this->renderer->renderString($template);


        //--PARSER
        $parser = \Config\Services::parser();
        // $dataPage = [
        //     'page_title'=>'Daftar Product',
        //     'products'=> [
        //         ['name'=> 'Laptop', 'price'=>8000000, 'stock'=>5],
        //         ['name'=> 'Smartphone', 'price'=>3000000, 'stock'=>5],
        //         ['name'=> 'Tablet', 'price'=>4000000, 'stock'=>5],
        //     ],
        //     'company_name'=> 'Toko Elektronik',
        //     'is_sale'=>true
        // ];

        // return $parser->setData($dataPage)->render('photos/index2', $dataPage);

        // $dataUser = [
        //     'user' => [
        //         'name' => 'John Doe',
        //         'age' => 25,
        //         'role' => 'admin',
        //         'is_verified' => true,
        //         'subscription' => 'premium',
        //         'login_count' => 50,
        //         'points' => 750,
        //         'last_login' => '2025-02-15',
        //         'notifications' => [
        //             ['type' => 'message', 'count' => 3],
        //             ['type' => 'alert', 'count' => 1]
        //         ]

        //     ],
        //     'site_settings' => [
        //         'maintenance_mode' => false,
        //         'allow_registration' => true
        //     ]
        // ];


        //return $parser->setData($dataUser)->render('photos/index3');

        $dataUser = [
            'user' => [
                [
                    'nama' => 'Jodi',
                    'email' => 'jodi@yopmail.com',
                    'alamat' => 'Jalan Bintaro Jaya Blok G No.5',
                    'date_joined' => '22/04/2023',
                ]
            ],
            'page_title' => 'User Details'
        ];


        return $parser->setData($dataUser)->render('photos/index4');


        //--VIEW
        //return view('photos/index', $data);
    }

    public function getNew()
    {
        return view('photos/new');
    }

    public function postCreate()
    {
        $photoModel = new EntitiesPhotos($this->request->getPost());
        echo $photoModel->nama . ", CREATED!";
    }
}
