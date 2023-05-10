<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

use App\Models\PaketModel;

class PaketC extends BaseController
{
    protected $PaketModel;
    public function __construct()
    {
        $this->PaketModel = new PaketModel();
    }
    public function awal()
    {

        $paket = $this->PaketModel->findAll();
        $data = [
            'paket' => $paket
        ];
        return view('user/paketC', $data);
    }
}
