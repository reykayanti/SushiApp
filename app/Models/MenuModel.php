<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'tb_menu'; //nama tablenya
    protected $allowedFields = ['jenis_menu', 'menu', 'keterangan', 'harga', 'img']; //yang boleh diisi
    protected $useTimestamps = true; //biar tanggal created_at dan updated_at nya otomatis keisi tanpa ditulis

    public function getMenu($id = false)
    {
        if ($id == false){ 
            return $this->findAll();
        }
        return $this->where(['id' => $id])-> first();
    }
}

