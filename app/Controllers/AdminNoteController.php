<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NotesModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdminNoteController extends BaseController
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

        return view('dashboard/note/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create Note',
        ];
        return view('dashboard/note/notes_create', $data);
    }

    public function store()
    {
        // dd($this->request->getPost());
        if (!$this->validate($this->notes->validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
        ];

        $note = $this->notes->insert($data);
        if ($note) {
            return redirect()->to('/dashboard/notes')->with('success', 'Note created successfully');
        } else {
            return redirect()->back()->with('error', 'Note creation failed');
        }
    }

    public function show($id)
    {
        $note = $this->notes->find($id);
        if (!$note) {
            return redirect()->back()->with('error', 'Data not found');
        }
        $data = [
            'title' => 'View Note',
            'note' => $note
        ];
        // dd($data);
        return view('dashboard/note/notes_show', $data);
    }

    public function edit($id)
    {
        $note = $this->notes->find($id);
        if (!$note) {
            return redirect()->back()->with('error', 'Data not found');
        }
        $data = [
            'title' => 'Edit Note',
            'note' => $note
        ];
        // dd($data);
        return view('dashboard/note/notes_edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate($this->notes->validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $note = $this->notes->find($id);
        if (!$note) {
            return redirect()->back()->with('error', 'Data not found');
        }
        $data = [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
        ];
        $note = $this->notes->update($id, $data);
        if ($note) {
            return redirect()->to('/dashboard/notes')->with('success', 'Note updated successfully');
        } else {
            return redirect()->back()->with('error', 'Note update failed');
        }
    }

    public function delete($id)
    {
        $note = $this->notes->find($id);
        if (!$note) {
            return redirect()->back()->with('error', 'Data not found');
        }
        // dd($note);
        $this->notes->delete($note);
        if ($note) {
            return redirect()->to('/dashboard/notes')->with('success', 'Note deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Note deletion failed');
        }
    }
}
