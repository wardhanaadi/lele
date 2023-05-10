<?php

namespace App\Models;

use CodeIgniter\Model;

class TrainerM extends Model
{
    protected $table      = 'trainer';
    protected $allowedFields = ['nama', 'alamat', 'nomor'];
}
