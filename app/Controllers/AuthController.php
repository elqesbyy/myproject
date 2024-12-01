<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Admin;
use App\Models\Professeur;
use App\Models\Etudiant;

class AuthController extends BaseController
{
    public function home(){
        return view('welcome_page');
    }
        public function login()
    {
        return view('auth/login');
    }

    public function profile(){
        
    }
    public function processLogin()
    {
            // Retrieve email and password from the POST request
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            // Check if the email exists in the admins table
            $admin = new Admin();
            $admin = $admin->where('email', $email)->first();

            if ($admin && password_verify($password, $admin['password'])) {
                // If admin matches, set session and redirect to admin dashboard
                session()->set('user_id', $admin['id']);
                session()->set('user_type', 'admin');
                return redirect()->to(base_url('admindashboard'));
            }


                // Check if the email exists in the professeurs table
    $professeur = new Professeur();
    $professeur = $professeur->where('email', $email)->first();

    if ($professeur && password_verify($password, $professeur['password'])) {
        // If professeur matches, set session and redirect to professeur dashboard
        session()->set('user_id', $professeur['id']);
        session()->set('user_type', 'professeur');
        return redirect()->to(base_url('professeurdashboard'));
    }

    // Check if the email exists in the etudiants table
    $etudiant = new Etudiant();
    $etudiant = $etudiant->where('email', $email)->first();

    if ($etudiant && password_verify($password, $etudiant['password'])) {
        // If etudiant matches, set session and redirect to etudiant dashboard
        session()->set('user_id', $etudiant['id']);
        session()->set('user_type', 'etudiant');
        return redirect()->to(base_url('etudiantdashboard'));
    }

    // If no match, return with an error message
    session()->setFlashdata('error', 'Invalid email or password.');
    return redirect()->to(base_url('login'));

    }


    
    
}
