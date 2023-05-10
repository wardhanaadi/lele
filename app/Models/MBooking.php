<?php

namespace App\Models;

use CodeIgniter\Model;

class MBooking extends Model
{
    protected $table      = 'booking';
    protected $allowedFields = ['nama_cust', 'nama_paket', 'nomor', 'alamat', 'tanggal'];
}
