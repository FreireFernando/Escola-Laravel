<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disciplina;

class DisciplinaController extends Controller
{
    // public function index()
    // {
    //     return view ('index');
    // }

    public function index()
    {
        $disciplinas = Disciplina::all();
        return view('disciplina.index', compact('disciplinas'));
    }
    public function create()
    {
        return view('Disciplina.formulario');
    }
    public function show($id){
        
    }
    public function edit($id){
        
    }
    
}
