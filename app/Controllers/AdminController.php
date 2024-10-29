<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Admin;

class AdminController extends BaseController
{
    protected $admin;

    public function __construct()
    {
        $this->admin = new Admin();
    }

     // Display all admins
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
        $this->admin->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        ]);

        return redirect()->to('/admin');
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
