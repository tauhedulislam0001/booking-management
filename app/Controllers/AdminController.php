<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminUser;

class AdminController extends BaseController
{
    public function index()
    {
        $adminModel = new AdminUser();
        $admins['admins'] = $adminModel->where('user_type', 1)->findAll();

        return view('admin/admin/index', $admins);
    }

    public function create() {
        return view('admin/admin/create');
    }
}
