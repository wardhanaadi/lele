<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\PaketModel;

class Paket extends BaseController
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
        return view('admin/paketA', $data);
    }

    public function tambah()
    {
        return view('admin/tambah');
    }

    public function simpan()
    {
        $this->PaketModel->save([
            'nama_paket' => $this->request->getVar('nama_paket'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'harga' => $this->request->getVar('harga')
        ]);
        return redirect()->to('paketA');
    }

    public function delete($id)
    {
        $this->PaketModel->delete($id);
        return redirect()->to('paketA');
    }

    public function edit($id)
    {
        $paket = $this->PaketModel->findAll();
        $data = [
            'paket' => $this->PaketModel->getPaket($id)
        ];
        return view('admin/edit', $data);
    }
}
