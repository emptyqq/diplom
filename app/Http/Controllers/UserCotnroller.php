<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class UserCotnroller extends Controller
{

    public function registration(Request $request)
    {

        $request->flash();

        $request->validate([
            'login' => 'required|unique:users',
            'email' => 'required',
            'password' => 'min:4'
        ], [], [
            'login' => 'Логин',
            'email' => 'Электронная почта',
            'password' => 'Пароль'
        ]);

        $user = new User();
        $user->login = $request->login;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        if (Auth::attempt(['password' => $request->password, 'email' => $request->email], true)) {
            return redirect()->route('home');
        }
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['password' => $request->password, 'email' => $request->email], true) || Auth::attempt(['password' => $request->password, 'login' => $request->email], true)) {
            return redirect()->route('home');
        } else {
            return redirect()->back()->withErrors(['error' => 'пользователь не найден']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }

    public function editAvatar(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $path = $request->file("avatar")->store("users/" . $user->login . "/", "public");
        $user->img = "public/storage/{$path}";
        $user->save();

        return redirect()->back();
    }

    function favorite(Content $content)
    {
        if (!Auth::check()) {
            return redirect()->back()->withErrors([
                'error' => 'Вы должны быть атворизованы чтобы добавить в закладки!'
            ]);
        }
        $favorites = json_decode(Cookie::get("favorites", '[]'));
        if (in_array($content->id, $favorites)) {
            array_splice($favorites, array_search($content->id, $favorites), 1);
        } else {
            array_push($favorites, $content->id);
        }
        return redirect()->back()->withCookie(cookie()->forever('favorites', json_encode($favorites)));
    }

    function plus(Content $content)
    {
        if (!Auth::check()) {
            return redirect()->back()->withErrors([
                'error' => 'Вы должны быть атворизованы чтобы добавить в закладки!'
            ]);
        }
        $plus = json_decode(Cookie::get("plus", '[]'));
        if (in_array($content->id, $plus)) {
            array_splice($plus, array_search($content->id, $plus), 1);
        } else {
            array_push($plus, $content->id);
        }
        return redirect()->back()->withCookie(cookie()->forever('plus', json_encode($plus)));
    }

    function minus(Content $content)
    {
        if (!Auth::check()) {
            return redirect()->back()->withErrors([
                'error' => 'Вы должны быть атворизованы чтобы добавить в закладки!'
            ]);
        }
        $minus = json_decode(Cookie::get("minus", '[]'));
        if (in_array($content->id, $minus)) {
            array_splice($minus, array_search($content->id, $minus), 1);
        } else {
            array_push($minus, $content->id);
        }
        return redirect()->back()->withCookie(cookie()->forever('minus', json_encode($minus)));
    }
}
