<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $consultas = Consulta::latest()->take(3)->get();
        return view('home',compact('consultas'));
    }
}
