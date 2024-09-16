<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;
use App\Models\manga;

class ChapterController extends Controller
{
    public function create()
    {
        return view('layouts.createManga');
    }

    // Save the form data
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|url',
            'link' => 'required|url',
            'nchapter'  => 'required|string|max:255',
            'nmanga'  => 'required|string|max:255',
            'date'  => 'required',

        ]);
        //dd($request);
        $chapter = new Chapter();
        $chapter->image = $validatedData['image'];
        $chapter->link = $validatedData['link'];
        $chapter->manga_id = $validatedData['nmanga'];
        $chapter->n_chapter = $validatedData['nchapter'];
        $chapter->date = $validatedData['date'];


        $chapter->save(); // Save the data to the database
        //manga::create($validatedData);
        return redirect()->route('chapter.index');
    }

    // Show all links
    public function index()
    {
        $mangas = manga::all();
        return view('layouts.createChapter', compact('mangas'));
    }
}
