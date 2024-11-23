<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Admin;


class AdminController extends BaseController
{


     // Display all admins
     public function index()
     {
         $data['admins'] = $this->admin->findAll();
         return view('admin/index', $data['admins']);
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
         
             $admin = new Admin();
             $data = [
                 'username' => $this->request->getPost('username'),
                 'email' => $this->request->getPost('email'),
                 'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
             ];
            //  $admin->insert($data);
             if ($admin->insert($data)) {
                //  return redirect()->to('admin/create')->with('success', 'Admin created successfully!');
                  route_to('admin/index');
             } else {
                 return redirect()->back()->with('error', 'Failed to create admin.');
             }
         }
         
   
      // Show edit form
      public function edit($id)
      {
          $data['admin'] = $this->admin->find($id);
          return view('admin/edit', $data);
      }

          // Update admin data
    public function update($id)
    {
        $this->adminl->update($id, [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        ]);

        return redirect()->to('/admin');
    }

      // Delete a admin
      public function delete($id)
      {
          $this->admin->delete($id);
          return redirect()->to('/admin');
      }
}
