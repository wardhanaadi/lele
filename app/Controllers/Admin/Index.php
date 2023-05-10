<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Index extends BaseController
{
    public function awal()
    {
        return view('admin\indexA');
    }
    public function kami()
    {
        return view('admin\tentangkami');
    }
   
}
