<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;


class GenreController extends Controller
{
    public function Create(Request $request)
    {
        $genre = new Genre();

        $genre->name = $request->name;

        $genre->save();
        
        return redirect()->route('genre');
        

    }
}
