<?php

namespace App\Controllers\Customer;

use App\Controllers\BaseController;

class Bayar extends BaseController
{
    public function awal()
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-S8CzCscsqun-jyhWTjl1_cIx';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = [
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 250000,
            )
        ];

        $data = [
            'snapToken' => \Midtrans\Snap::getSnapToken($params)
        ];

        return view('user/bayar', $data);
    }

    public function simpan()
    {
    }
}
