<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    // Get all Notes
    public function index()
    {
        return Notes::all();
    }

    // Get one Note
    public function show($id)
    {
        return Notes::find($id);
    }

    // Create one Note
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $note = new Notes;
        $note->title = $request->title;
        $note->content = $request->content;
        $note->save();

        return $note;
    }

    // Update one Note
    public function update(Request $request, $id)
    {
        $note = Notes::findOrFail($id);
        $note->update($request->all());

        return $note;
    }

    // Delete one Note
    public function delete(Request $request, $id)
    {
        $note = Notes::findOrFail($id);
        $note->delete();

        return 204;
    }
}
