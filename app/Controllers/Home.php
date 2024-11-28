<?php

namespace App\Controllers;
use App\Models\Admin;
use App\Models\Professeur;
use App\Models\Etudiant;
use App\Models\Cour;
use App\Models\Matiere; 

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

    public function professeurdashboard()
    {
        // Example: Using hardcoded professeur ID for simplicity
        $professeurId = 1; // Replace with dynamic logic once you implement auth.
    
        // Load models
        $matiere = new Matiere();
        $cour = new Cour();
        $professeur = new Professeur();
    
        // Get professeur data
        $professeur = $professeur->find($professeurId);
    
        if (!$professeur) {
            return "Professeur not found!"; // Handle missing professeur.
        }
    
        // Get the matiere associated with the professeur
        $matiere = $matiere->find($professeur['matiere_id']);
    
        // Get cours related to this matiere
        $cours = $cour->select('cours.*, matieres.name as matiere_name')
                           ->join('matieres', 'matieres.id = cours.matiere_id')
                           ->where('cours.matiere_id', $matiere['id'])
                           ->findAll();
    
        // Pass data to view
        return view('professeurdashboard', [
            'professeur' => $professeur,
            'matiere'    => $matiere,
            'cours'      => $cours,
        ]);
    } 
    


    public function __construct()
    {
        $this->cour = new Cour(); 


    }

    public function etudiantdashboard()
    {
        //  Load models
        // $cour = new Cour();
        // $matiere = new Matiere();
        // $professeur = new Professeur();

        // Fetch all courses
        $data = [
            'cours' => $this->cour
                ->select('cours.*, matieres.name as matiere_name, professeurs.name as professeur_name')
                ->join('matieres', 'matieres.id = cours.matiere_id')
                ->join('professeurs', 'professeurs.id = cours.professeur_id')
                ->findAll(),
        ];


        return view('etudiantdashboard', $data);
    }


    
}
