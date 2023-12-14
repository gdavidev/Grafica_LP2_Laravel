<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produto;

class UserController extends Controller
{
    public function dashboard() {
        $user = auth()->user();
        $produtos = Produto::all();

        return view('dashboard', ['user' => $user, 'produtos' => $produtos]);
    }
}
