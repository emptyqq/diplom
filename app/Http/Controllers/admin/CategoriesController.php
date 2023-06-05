<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function Create(Request $request)
    {
        $type = new Type();
        $type->name = $request->name;
        $type->icon = $request->icon;
        $type->save();

        return redirect()->route('categories');
    }


    public function edit(Request $request)
    {
        $genre = Type::find($request->id);

        $genre->name = $request->name;
        $genre->icon = $request->icon;
        $genre->save();

        return redirect()->route('categories');
    }

    public function remove(Request $request)
    {
        Type::find($request->id)->delete();
        return redirect()->route('categories');
    }
}
