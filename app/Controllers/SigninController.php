<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Controller;
use App\Models\AdminUser;

class SigninController extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('signin');
    } 
  
    public function loginAuth()
    {
        $session = session();
        $userModel = new AdminUser();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('email', $email)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);

            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'email' => $data['email'],
                    'user_type' => $data['user_type'],
                    'status' => $data['status'],
                    'isLoggedIn' => TRUE,
                ];

                $session->set($ses_data);
                
                if($session->get('status') == 1)
                {
                    if($session->get('user_type') == 1) 
                    {
                        return redirect()->to('/admin/dashboard');
                    } 
                    elseif($session->get('user_type') == 3) 
                    {
                        return redirect()->to('/profile');
                    } else {

                        $session->setFlashdata('msg', 'stay away from us!');
                        return redirect()->to('/signin');
                    }
                    //user type will be added here

                } 
                elseif($session->get('status') == 0) {
                    
                    $session->setFlashdata('msg', 'You are not authorized to login! please contact with adminstrator');
                    return redirect()->to('/signin');
                }
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/signin');
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/signin');
        }
    }
}
