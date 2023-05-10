<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

use App\Models\MBooking;

class BookingC extends BaseController
{
	protected $MBooking;
	public function __construct()
	{
		$this->MBooking = new MBooking();
	}
	public function awal()
	{
		$model = new MBooking();
		$data['paket'] = $model->findAll();
		return view('user/BookingC', $data);
	}

	public function tambah()
	{
		return view('user/BookingC');
	}
	public function save()
	{
		$this->MBooking->save([
			'nama_cust' => $this->request->getVar('nama_cust'),
			'nama_paket' => $this->request->getVar('nama_paket'),
			'nomor' => $this->request->getVar('nomor'),
			'alamat' => $this->request->getVar('alamat'),
			'tanggal' => $this->request->getVar('tanggal')
			// $paket= $this->request->getPost('paket')
			// $model = new MBooking();
		]);
		return redirect()->to('/');
	}
}
