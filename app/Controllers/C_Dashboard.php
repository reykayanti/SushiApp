<?php

namespace App\Controllers;
use App\Models\MenuModel;

class C_Dashboard extends BaseController
{
    protected $menuModel;

    public function __construct()
	{
		$this->menuModel = new MenuModel();
	}

    public function menu()
    {
        $menu    = $this->menuModel->findAll();
        $data = [
            'menu'    => $menu
        ];
        // dd($menu);
        return view('dashboard/view_menu', $data);
    }
    
    public function addmenu()
    {
        return view('dashboard/view_menu');
    }

   
}
