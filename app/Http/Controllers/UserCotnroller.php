<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


    // else {
    //     return redirect()->back()->withErrors(['eroor' => 'пользвоатель не найден!']):
    // }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
