<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TrainerM;

class Trainer extends BaseController
{

    protected $TrainerM;
    public function __construct()
    {
        $this->TrainerM = new TrainerM();
    }
    public function index()
    {
        $trainer = $this->TrainerM->findAll();
        $data = [
            'trainer' => $trainer
        ];
        return view('admin\trainer', $data);
    }
    public function tambah()
    {
        return view('admin/tambaht');
    }
    public function simpan()
    {
        $this->TrainerM->save([
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'nomor' => $this->request->getVar('nomor')
        ]);
        return redirect()->to('trainer');
    }
    public function delete($id)
    {
        $this->TrainerM->delete($id);
        return redirect()->to('trainer');
    }
}
