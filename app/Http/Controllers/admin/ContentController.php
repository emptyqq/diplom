<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Content_genre;
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
        $content->producer = $request->producer;
        $content->age = $request->age;
        $content->published = $request->published;
        $content->duration = $request->duration;
        $content->trailers = $request->trailers;
        $content->visibility = $request->visibility;
        // $content->video = $request->video;
        $content->save();

        if ($request->has("genres")) {
            foreach ($request->genres as $genre) {
                $genreToDatabase = new Content_genre();
                $genreToDatabase->content_id = $content->id;
                $genreToDatabase->genre_id = $genre;
                $genreToDatabase->save();
            }
        }


        return redirect()->route('content');
    }

    public function edit(Request $request)
    {

        $content = Content::find($request->id);

        if ($request->hasFile("img")) {
            $path = $request->file("img")->store("img/contents", "public");
            $content->img = "public/storage/" . $path;
        }


        if ($request->has('type') && $request->input('type')) $content->type = $request->type;
        if ($request->has('name') && $request->input('name')) $content->name = $request->name;
        if ($request->has('name_eng') && $request->input('name_eng')) $content->name_eng = $request->name_eng;
        if ($request->has('description') && $request->input('description')) $content->description = $request->description;
        if ($request->has('rating') && $request->input('rating')) $content->rating = $request->rating;
        if ($request->has('country') && $request->input('country')) $content->country = $request->country;
        if ($request->has('producer') && $request->input('producer')) $content->producer = $request->producer;
        if ($request->has('age') && $request->input('age')) $content->age = $request->age;
        if ($request->has('published') && $request->input('published')) $content->published = $request->published;
        if ($request->has('duration') && $request->input('duration')) $content->duration = $request->duration;
        if ($request->has('trailers') && $request->input('trailers')) $content->trailers = $request->trailers;
        if ($request->has('visibility')) $content->visibility = $request->visibility ? 1 : 0;
        $content->save();

        // dd($request);

        Content_genre::where("content_id", $content->id)->delete();
        if ($request->has("genres")) {
            foreach ($request->genres as $genre) {
                $genreToDatabase = new Content_genre();
                $genreToDatabase->content_id = $content->id;
                $genreToDatabase->genre_id = $genre;
                $genreToDatabase->save();
            }
        }


        return redirect()->route('content');
    }


    public function remove(Request $request)
    {
        Content::find($request->id)->delete();
        return redirect()->route('content');
    }
}
