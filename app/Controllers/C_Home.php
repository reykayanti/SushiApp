<?php

namespace App\Controllers;
use App\Models\MenuModel;

class C_Home extends BaseController
{
    public function index()
    {
        $menuModel = new MenuModel();

        $data['menu']= $menuModel->tampilMenuHome()->getResultArray();
        
        return view('Home/view_home', $data);
    }

    public function services()
    {
        return view('Home/view_services');
    }

    public function aboutus()
    {
        return view('Home/view_about');
    }

    public function contact()
    {
        return view('Home/view_contact');
    }

}
