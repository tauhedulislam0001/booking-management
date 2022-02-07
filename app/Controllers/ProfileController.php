<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Controller;

class ProfileController extends BaseController
{
    public function index()
    {
        $session = session();
        echo "Hello : ".$session->get('username');
    }
}
