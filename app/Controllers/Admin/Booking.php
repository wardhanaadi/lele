<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MBooking;

class Booking extends BaseController
{
    protected $MBooking;
    public function __construct()
    {
        $this->MBooking = new MBooking();
    }
    public function index()
    {
        $booking = $this->MBooking->findAll();
        $data = [
            'booking' => $booking
        ];
        return view('admin/bookingA', $data);
    }
}
