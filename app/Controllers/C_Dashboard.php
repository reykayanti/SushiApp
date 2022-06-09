<?php

namespace App\Controllers;
// use App\Models\MenuModel;

class C_Dashboard extends BaseController
{
    // protected $menuModel;

    // public function __construct()
	// {
	// 	$this->menuModel = new MenuModel();
	// }

    public function index()
    {
        return view('dashboard/view_menu');
    }
    
    public function menu()
    {
        return view('dashboard/view_menu');
    }

   
}
