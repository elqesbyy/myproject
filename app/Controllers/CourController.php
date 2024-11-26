<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Cour;
use App\Models\Matiere;
use App\Models\Professeur;


class CourController extends BaseController
{
    protected $cour;
    protected $matiere;
    protected $professeur;

    public function __construct()
    {
        $this->cour = new Cour();
        $this->matiere = new Matiere();
        $this->professeur = new Professeur();

    }
    public function index()
    {
        $data = [
            'cours' => $this->cour
                ->select('cours.*, matieres.name as matiere_name, professeurs.name as professeur_name')
                ->join('matieres', 'matieres.id = cours.matiere_id')
                ->join('professeurs', 'professeurs.id = cours.professeur_id')
                ->findAll(),
        ];

        return view('cour/index', $data);
    }
    public function create()
    {
        $data = [
            'matieres' => $this->matiere->findAll(),
            'professeurs' => $this->professeur->findAll(),
        ];

        return view('cour/create', $data);
    }

    public function store()
    {
        // Get the uploaded PDF file
        $file = $this->request->getFile('pdf_file');
    
        // Check if the file is valid
        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Generate a unique name for the file
            $newName = $file->getRandomName();
    
            // Move the file to the "uploads" directory
            // $file->move(WRITEPATH . 'uploads', $newName);
            $file->move(FCPATH . 'uploads', $newName); // Move to public/uploads
    

            // Save the file path to the database
        if (!$this->cour->save([
            'matiere_id' => $this->request->getPost('matiere_id'),
            'professeur_id' => $this->request->getPost('professeur_id'),
            'name'       => $this->request->getPost('name'),
            'pdf_file'   => 'uploads/' . $newName,  // Save relative file path
        ])) {
            return redirect()->back()->with('error', 'Failed to save course.');
        }

        return redirect()->to('/cour')->with('success', 'Cours ajouté avec succès');
    } else {
        return redirect()->back()->with('error', 'File upload failed: ' . $file->getErrorString());
    
        }

    
    }
    

    public function edit($id)
    {$data = [
        'cour' => $this->cour->find($id),
        'matieres' => $this->matiere->findAll(),
        'professeurs' => $this->professeur->findAll(),
    ];
        return view('cour/edit', $data);
    }

    public function update($id)
{
    // Get the uploaded PDF file
    $file = $this->request->getFile('pdf_file');
    $pdfFile = $this->cour->find($id)['pdf_file']; // Get current file name (if any)

    // If a new file is uploaded
    if ($file && $file->isValid() && !$file->hasMoved()) {
        // Generate a unique name for the file
        $newName = $file->getRandomName();

        // Move the file to the "uploads" directory
        $file->move(WRITEPATH . 'uploads', $newName);

        // If there's an existing file, delete it
        if ($pdfFile && file_exists(WRITEPATH . $pdfFile)) {
            unlink(WRITEPATH . $pdfFile);
        }

        $pdfFile = 'uploads/' . $newName;  // Save new file path
    }

    // Update the database record
    $this->cour->update($id, [
        'matiere_id' => $this->request->getPost('matiere_id'),
        'professeur_id' => $this->request->getPost('professeur_id'),
        'name'       => $this->request->getPost('name'),
        'pdf_file'   => $pdfFile, // Save file path
    ]);

    return redirect()->to('/cour')->with('success', 'Cours mis à jour avec succès');
}


    public function delete($id)
    {
        $this->cour->delete($id);
        return redirect()->to('/cour')->with('success', 'Cours supprimé avec succès');
    }
}