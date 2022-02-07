<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminDashboardController extends BaseController
{
    public function index()
    {
        // $data = ['title' => 'admin-dashboard'];
        $session = session();
        // echo "Hello : ".$session->get('username');
        echo view('admin/dashboard/index');
    }
}
