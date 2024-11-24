<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Matiere;

class MatiereController extends BaseController
{

    protected $matiereModel;

    public function __construct()
    {
        $this->matiere = new Matiere();
    }

    public function index()
    {
        $data['matieres'] = $this->matiere->findAll();
        return view('matiere/index', $data);
    }

    public function create()
    {
        return view('matiere/create');
    }

    public function store()
    {
        $this->matiere->save([
            'name' => $this->request->getPost('name'),
        ]);
        return redirect()->to('/matiere')->with('success', 'Matière ajoutée avec succès');
    }

    public function edit($id)
    {
        $data['matiere'] = $this->matiere->find($id);
        return view('matiere/edit', $data);
    }

    public function update($id)
    {
        $this->matiere->update($id, [
            'name' => $this->request->getPost('name'),
        ]);
        return redirect()->to('/matiere')->with('success', 'Matière mise à jour avec succès');
    }

    public function delete($id)
    {
        $this->matiere->delete($id);
        return redirect()->to('/matiere')->with('success', 'Matière supprimée avec succès');
    }
}
