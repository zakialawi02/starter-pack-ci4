<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NotesModel;
use CodeIgniter\HTTP\ResponseInterface;

class Note extends BaseController
{
    protected $notes;

    public function __construct()
    {
        $this->notes = new NotesModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Notes',
            'notes' => $this->notes->getNotes()
        ];
        // dd($data);

        return view('back/notes', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create Note',
        ];
        return view('back/notes_create', $data);
    }

    public function store()
    {
        // dd($this->request->getPost());
        $rules = [
            'title' => 'required|min_length[5]|max_length[255]',
            'content' => 'required'
        ];
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
        ];
        $note = $this->notes->insert($data);
        if ($note) {
            return redirect()->to('/notes')->with('success', 'Note created successfully');
        } else {
            return redirect()->back()->with('error', 'Note creation failed');
        }
    }
}
