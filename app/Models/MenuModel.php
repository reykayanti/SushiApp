<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'tb_menu'; //nama tablenya
    protected $allowedFields = ['jenis_menu', 'menu', 'keterangan', 'harga', 'image']; //yang boleh diisi
    protected $useTimestamps = true; //biar tanggal created_at dan updated_at nya otomatis keisi tanpa ditulis
}

