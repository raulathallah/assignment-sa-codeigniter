<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        //dd(user());
        return view('home');
    }
}
