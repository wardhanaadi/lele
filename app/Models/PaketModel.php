<?php

namespace App\Models;

use CodeIgniter\Model;

class PaketModel extends Model
{
    protected $table      = 'paket';
    protected $allowedFields = ['nama_paket', 'deskripsi', 'harga'];
}
