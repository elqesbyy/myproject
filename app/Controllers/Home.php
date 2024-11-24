<?php

namespace App\Controllers;
use App\Models\Admin;
use App\Models\Professeur;
use App\Models\Etudiant;

class Home extends BaseController
{
    public function index(): string
    {
  $admin = new Admin();
        $professeur = new Professeur();
        $etudiant = new Etudiant();

        // Fetch counts
        $total_admins = $admin->countAll();
        $total_professeurs = $professeur->countAll();
        $total_etudiants = $etudiant->countAll();

        // Pass the data to the view
        return view('admindashboard', [
            'total_admins' => $total_admins,
            'total_professeurs' => $total_professeurs,
            'total_etudiants' => $total_etudiants
        ]);
    }    
}
