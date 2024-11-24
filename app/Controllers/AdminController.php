<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Admin;


class AdminController extends BaseController
{

        public function __construct()
    {
        $this->admin = new Admin();
    }

    public function index()
    {
          $data['admins'] = $this->admin->findAll();

        return view('admin/index', $data);
    }

     // Show create form
     public function create()
     {
         return view('admin/create');
     }

         // Save new admin
         public function store()
         {

             $validation = \Config\Services::validation();
         
             $validation->setRules([
                 'username' => 'required|min_length[3]|max_length[20]',
                 'email' => 'required|valid_email',
                 'password' => 'required|min_length[6]'
             ]);
         
            //  if (!$validation->withRequest($this->request)->run()) {
            //      return redirect()->back()->withInput()->with('errors', $validation->getErrors());
            //  }
            // log_message('debug', 'Validation passed');
             $admin = new Admin();
             $data = [
                 'username' => $this->request->getPost('username'),
                 'email' => $this->request->getPost('email'),
                 'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
             ];
             if ($admin->insert($data)) {
                  return redirect()->to('admin/index')->with('success', 'Admin created successfully!');
              } else {
                return redirect()->back()->with('error', 'Failed to create admin.');
             }
         }
         
   
      // Show edit form
      public function edit($id)
      {
        
          $admin = $this->admin->find($id);
          $data['admin'] = $admin;
          return view('admin/edit', $data);
      }

          // Update admin data
    public function update($id)
    {
        $this->admin->update($id, [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        ]);

        return redirect()->to('/admin/index');
    }

      // Delete a admin
      public function delete($id)
      {
          $this->admin->delete($id);
          return redirect()->to('/admin/index');
      }
}
