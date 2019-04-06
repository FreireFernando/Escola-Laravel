<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        $nome = 'Fernando Freire';
        $nota = 7;
        $ACarros = ['Maseratti', 'Fusca', 'Ferrari', 'Gol', 'Palio'];
        return view('template', compact('nome', 'ACarros', 'nota'));
    }

    public function pagina2(){
        $nome = 'Fernando Freire';
        $nota = 7;
        $ACarros = ['Maseratti', 'Fusca', 'Ferrari', 'Gol', 'Palio'];
        return view('pagina2', compact('nome', 'ACarros', 'nota'));
    }

    public function pagina3(){
        $nome = 'Fernando Freire';
        $nota = 7;
        $ACarros = ['Maseratti', 'Fusca', 'Ferrari', 'Gol', 'Palio'];
        return view('pagina3', compact('nome', 'ACarros', 'nota'));
    }
}
