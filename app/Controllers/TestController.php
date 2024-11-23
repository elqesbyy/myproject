<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Admin;


class TestController extends BaseController
{
    public function index()
    {
        return view('admin/create');
 
    }

    public function store()
    {
        $admin = new Admin();

        // Get input data 
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), // Hash the password
        ];

         if ($admin->insert($data)) {
            return redirect()->to('admin/create')->with('success', 'Admin created successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to create admin.');
        }
        

    }
}
