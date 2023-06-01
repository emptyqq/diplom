<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function Create(Request $request)
    {
        $users = new Users();
        $users->status = $request->status;
        $users->login = $request->login;
        $users->email = $request->email;
        $users->img = $request->img;

        $users->save();

        return redirect()->route('users');
    }
}
