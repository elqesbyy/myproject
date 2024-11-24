<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Etudiant;
use App\Models\Filiere;

class EtudiantController extends BaseController
{

    protected $etudiant;
    protected $filiere;

    public function __construct()
    {
        $this->etudiant = new Etudiant();
        $this->filiere = new Filiere();
    }
    public function index()
    {
        $data['etudiants'] = $this->etudiant
        ->select('etudiants.*, filiere.name as filiere_name')
        ->join('filiere', 'etudiants.id_filiere = filiere.id', 'left')
        ->findAll();
    return view('etudiant/index', $data);
    }

     // Show the form for creating a new étudiant
     public function create()
     {
         $data['filieres'] = $this->filiere->findAll();
         return view('etudiant/create', $data);
     }
 
     // Save a new étudiant
     public function store()
     {
         $this->etudiant->save([
             'name' => $this->request->getPost('name'),
             'email' => $this->request->getPost('email'),
             'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
             'id_filiere' => $this->request->getPost('id_filiere'),
         ]);
 
         return redirect()->to('/etudiant')->with('success', 'Étudiant created successfully!');
     }
 
     // Show the edit form for an étudiant
     public function edit($id)
     {
         $data['etudiant'] = $this->etudiant->find($id);
         $data['filieres'] = $this->filiere->findAll();
         return view('etudiant/edit', $data);
     }
 
     // Update an étudiant
     public function update($id)
     {
         $this->etudiant->update($id, [
             'name' => $this->request->getPost('name'),
             'email' => $this->request->getPost('email'),
             'id_filiere' => $this->request->getPost('id_filiere'),
         ]);
 
         return redirect()->to('/etudiant')->with('success', 'Étudiant updated successfully!');
     }
 
     // Delete an étudiant
     public function delete($id)
     {
         $this->etudiant->delete($id);
         return redirect()->to('/etudiant')->with('success', 'Étudiant deleted successfully!');
     }
}
