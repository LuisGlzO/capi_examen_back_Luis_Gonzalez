<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_domicilio;
use App\Models\User;
use Carbon\Carbon;
class userController extends Controller
{
    //
    public function index(){
        //En este modo hago un append en el modelo al consultarlo, de tal manera que en todas las consultas obtendré la edad como un campo extra
        // $usuarios = User::with('casa')->get();

        //En este caso primero pido todos los usuarios y luego les hago un append a cada uno de ellos
        //Esto sirve para mostrar la edad pero solo en esta consulta específica
        $usuarios = User::with('casa')->get()->map(function ($usuario){
            $usuario->edad = Carbon::parse($usuario->fecha_nacimiento)->diff(Carbon::now())->y;
            return $usuario;
        });

        return response()->json(compact('usuarios'));
    }
}
