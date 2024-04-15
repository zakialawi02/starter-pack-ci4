<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class NotesSeeder extends Seeder
{
    public function run()
    {
        $notes = [
            [
                'title' => 'Meeting Agenda',
                'content' => 'Agenda for the weekly team meeting',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ],
            [
                'title' => 'Project Update',
                'content' => 'Summary of the latest progress on Project X',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ],
            [
                'title' => 'To-Do List',
                'content' => 'Tasks to be completed by end of the day',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ],
            [
                'title' => 'Research Notes',
                'content' => 'Findings from the recent market research',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ],
            [
                'title' => 'Client Meeting',
                'content' => 'Notes from the meeting with Client Y',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ],

        ];

        foreach ($notes as $note) {
            $this->db->table('notes')->insert($note);
        }
    }
}
