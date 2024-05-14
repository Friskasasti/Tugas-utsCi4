<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\CustomerModel;
use App\Models\TransaksiModel;
use App\Controllers\BaseController;
use App\Models\TransaksiDetailModel;

class Home extends BaseController
{
    public function index(): string
    {
       $data = [
            'active' => 'dashboard',
            'judul' => 'Dashboard',
            'subtitle' => 'Dashboard',
        ];
        return view('dashboard', $data);
    }
}
