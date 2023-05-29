<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    // инпутик пук реквест-инпут-приходит-со-страницы
    public function Create(Request $request)
    {

        $path = $request->file("img")->store("img/contents", "public");
        // $request->file("img")->store();

        $content = new Content();
        $content->type = $request->type;
        $content->name = $request->name;
        $content->name_eng = $request->name_eng;
        $content->img = "public/storage/" . $path;
        $content->description = $request->description;
        $content->rating = $request->rating;
        $content->country = $request->country;
        $content->tag = $request->tag;
        $content->producer = $request->producer;
        $content->age = $request->age;
        $content->published = $request->published;
        $content->duration = $request->duration;
        $content->trailers = $request->trailers;
        // $content->video = $request->video;

        $content->save();

        return redirect()->route('content');
    }
}
