<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manga;




class MangaController extends Controller
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
            'name'  => 'required|string|max:255',
        ]);
        //dd($request);
        $manga = new Manga();
        $manga->image = $validatedData['image'];
        $manga->link = $validatedData['link'];
        $manga->name = $validatedData['name'];
        $manga->user_id= auth()->id();
        $manga->save(); // Save the data to the database
        //manga::create($validatedData);
        return redirect()->route('links.index');
    }

    // Show all links
    public function index()
    {
        $links = manga::all();
        return view('layouts.home', compact('links'));
    }
    public function manga($id){
        $chapters = manga::find($id)->chapters()->get();
        $manga = manga::find($id);

        return view('layouts.showManga', compact('chapters','manga'));

    }
}
