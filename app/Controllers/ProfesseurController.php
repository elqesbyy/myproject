<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Professeur;
use App\Models\Matiere;

class ProfesseurController extends BaseController
{

    protected $professeur;
    protected $matiere;

    public function __construct()
    {
        $this->professeur = new Professeur();
        $this->matiere = new Matiere();
    }


    public function index()
    {
        $data['professeurs'] = $this->professeur
            ->select('professeurs.*, matieres.name as matiere_name')
            ->join('matieres', 'matieres.id = professeurs.matiere_id', 'left')
            ->findAll();
        return view('professeur/index', $data);
    }
    public function create()
    {
        $data['matieres'] = $this->matiere->findAll();
        return view('professeur/create', $data);
    }

    public function store()
    {
        $this->professeur->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'matiere_id' => $this->request->getPost('matiere_id'),
        ]);
        return redirect()->to('/professeur')->with('success', 'Professeur created successfully!');
    }

    public function edit($id)
    {
        $data['professeur'] = $this->professeur->find($id);
        $data['matieres'] = $this->matiere->findAll();
        return view('professeur/edit', $data);
    }

    public function update($id)
    {
        $this->professeur->update($id, [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'matiere_id' => $this->request->getPost('matiere_id'),
        ]);
        return redirect()->to('/professeur')->with('success', 'Professeur updated successfully!');
    }

    public function delete($id)
    {
        $this->professeur->delete($id);
        return redirect()->to('/professeur')->with('success', 'Professeur deleted successfully!');
    }
}
