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
        return view('dashboard/view_addmenu');
    }

    public function save()
    {
        $validation_foto = $this->validate([
            'img' => 'uploaded[img]|mime_in[img,image/jpg,image/jpeg,image/gif,image/png]|max_size[img,10000]'       
        ]);

        if ($validation_foto == false){
            return redirect()->to('/admin')->with('gagal', '<b>Foto Gagal di upload');
        } else{
            $upload = $this->request->getFile('img');
		    $upload->move('img');
            $namaimg = $upload->getName();

            $this->menuModel->save([ //auto save tanpa model
			    'menu'          => $this->request->getVar('menu'),
			    'jenis_menu'    => $this->request->getVar('jenis_menu'),
			    'keterangan'    => $this->request->getVar('keterangan'),
			    'harga'         => $this->request->getVar('harga'),
                'img'           => $namaimg
		    ]);
        return redirect()->to('/admin');
        }
    }

    public function edit($id)
    {
        $data = [
            'menu'   => $this->menuModel->getMenu($id)
        ];
        return view('dashboard/view_editmenu', $data);
    }

    public function update($id)
    {
        $validation_foto = $this->validate([
            'img' => 'uploaded[img]|mime_in[img,image/jpg,image/jpeg,image/gif,image/png]|max_size[img,10000]'       
        ]);

        if ($validation_foto == false){
            $this->menuModel->save([ //auto save tanpa model
                'id'            => $id,
			    'menu'          => $this->request->getVar('menu'),
			    'jenis_menu'    => $this->request->getVar('jenis_menu'),
			    'keterangan'    => $this->request->getVar('keterangan'),
			    'harga'         => $this->request->getVar('harga')
		    ]);
            return redirect()->to('/admin');
        } else{
            $upload = $this->request->getFile('img');
		    $upload->move('img');
            $namaimg = $upload->getName();

            $this->menuModel->save([ //auto save tanpa model
                'id'            => $id,
			    'menu'          => $this->request->getVar('menu'),
			    'jenis_menu'    => $this->request->getVar('jenis_menu'),
			    'keterangan'    => $this->request->getVar('keterangan'),
			    'harga'         => $this->request->getVar('harga'),
                'img'           => $namaimg
		    ]);
        return redirect()->to('/admin');
        }
    }
    public function delete($id)
    {
        $this->menuModel->delete($id);
        return redirect()->to('/admin');
    }
   
}
