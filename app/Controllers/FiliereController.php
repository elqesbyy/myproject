<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Filiere;

class FiliereController extends BaseController
{
    protected $filiereModel;

    public function __construct()
    {
        $this->filiere = new Filiere();
    }
    public function index()
    {
        $data['filieres'] = $this->filiere->findAll();
        return view('filiere/index', $data);
    }
    public function create()
    {
        return view('filiere/create');
    }
        // Save the new filiere
        public function store()
        {
            $this->filiere->save([
                'name' => $this->request->getPost('name'),
            ]);
    
            return redirect()->to('/filiere')->with('success', 'Filiere created successfully!');
        }
        public function edit($id)
        {
            $data['filiere'] = $this->filiere->find($id);
            return view('filiere/edit', $data);
        }

            // Update the filiere record
    public function update($id)
    {
        $this->filiere->update($id, [
            'name' => $this->request->getPost('name'),
        ]);

        return redirect()->to('/filiere')->with('success', 'Filiere updated successfully!');
    }

    // Delete a filiere
    public function delete($id)
    {
        $this->filiere->delete($id);
        return redirect()->to('/filiere')->with('success', 'Filiere deleted successfully!');
    }

    
}
