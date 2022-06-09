<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Home/view_home');
    }

    public function services()
    {
        return view('Dashboard/view_menu');
    }

    public function menu()
    {
        return view('Home/view_menu');
    }

    public function about()
    {
        return view('Home/view_about');
    }

    public function contact()
    {
        return view('Home/view_contact');
    }

}
