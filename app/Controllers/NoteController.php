<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NotesModel;
use CodeIgniter\HTTP\ResponseInterface;

class NoteController extends BaseController
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

        return view('front/notes', $data);
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
        return view('front/notes_show', $data);
    }
}
