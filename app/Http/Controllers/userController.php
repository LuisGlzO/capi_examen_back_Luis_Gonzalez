<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_domicilio;
use App\Models\User;

class userController extends Controller
{
    //
    public function index(){
        $usuarios = User::with('casa')->get();
        return response()->json(compact('usuarios'));
    }
}
