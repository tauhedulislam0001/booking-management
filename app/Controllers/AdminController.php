<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminUser;

class AdminController extends BaseController
{
    public function index()
    {
        $adminModel = new AdminUser();
        $admins['admins'] = $adminModel->where('user_type', 2)->findAll();

        return view('admin/admin/index', $admins);
    }

    public function create() {
        return view('admin/admin/create');
    }

    public function store() {

        helper(['form']);

        $rules = [
                'username'          => 'required|min_length[2]|max_length[50]',
                'email'             => 'required|min_length[4]|max_length[100]|valid_email|is_unique[admin_users.email]',
                'password'          => 'required|min_length[4]|max_length[50]',
                'confirmpassword'   => 'matches[password]',
                'mobile_no'         => 'required|is_unique[admin_users.mobile_no]',
        ];
          
        if($this->validate($rules)){
            $userModel = new AdminUser();

            $data = [
                'username'      => $this->request->getVar('username'),
                'email'         => $this->request->getVar('email'),
                'password'      => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'mobile_no'     => $this->request->getVar('mobile_no'),
                'status'        => 1,
                'user_type'     => 2,
                'gender'        => 2,
            ];

            $userModel->save($data);
            return redirect()->to('/admin/create');

        }else{

            $data['validation'] = $this->validator;
            echo view('admin/admin/create', $data);
        }
    }
}
