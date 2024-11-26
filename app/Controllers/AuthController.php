<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Admin;
use App\Models\Professeur;
use App\Models\Etudiant;

class AuthController extends BaseController
{
    
        public function login()
    {
        return view('auth/login');
    }

    public function processLogin()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Check in admins table
        $admin = new Admin();
        $admin = $admin->where('email', $email)->first();

        if ($admin && password_verify($password, $admin['password'])) {
            return redirect()->to(base_url('admindashboard'));
                }

        // Check in professeurs table
        // $professeur = new Professeur();
        // $professeur = $professeur->where('email', $email)->first();

        // if ($professeur && password_verify($password, $professeur['password'])) {
        //     return redirect()->to('/professeurdashboard');
        // }

        // Check in étudiants table
    //     $etudiant = new Etudiant();
    //     $etudiant = $etudiant->where('email', $email)->first();

    //     if ($etudiant && password_verify($password, $etudiant['password'])) {
    //         return redirect()->to('/etudiantdashboard');
    //     }

    //     // If no match found
    //     return redirect()->back()->with('error', 'Invalid login credentials.');
    // }

    // public function logout()
    // {
    //     // Clear session or handle logout logic
    //     return redirect()->to('/login');
    }
    
}
