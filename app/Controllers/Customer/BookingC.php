<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

use App\Models\MBooking;
use App\Models\PaketModel;

class BookingC extends BaseController
{
	protected $MBooking;
	public function __construct()
	{
		$this->MBooking = new MBooking();
	}
	public function awal()
	{
		$paket = new PaketModel();
		$data['paket'] = $paket->findAll();
		return view('user/BookingC', $data);
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
