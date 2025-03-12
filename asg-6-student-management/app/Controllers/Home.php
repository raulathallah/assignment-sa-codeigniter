<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        //dd(user());
        return view('home');
    }

    public function dashboardStudent()
    {
        return view('dashboard/student');
    }

    public function dashboardAdmin()
    {
        return view('dashboard/admin');
    }

    public function dashboardLecturer()
    {
        return view('dashboard/lecturer');
    }
}
