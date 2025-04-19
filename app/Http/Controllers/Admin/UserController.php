<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() // listagem
    {
        $users = User::all();
//        dd($users);; debugar variaveis
        return view ('admin.users.index', compact('users'));
//        return "Ola meu mano {$user->name}!! ({$user->email})";

    }
}
