<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*ROTA DE VIEW*/
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/curso', function () {
//     return view('curso');
// });
Route::get('/index', function () {
    return view('index');
});
Route::get('/media', function () {
    return view('media');
});

// Route::get('/media', function () {
//     return view('media');
// });

/*ROTA DE CONTROLLER*/
Route::get('/template', 'TemplateController@index');
Route::get('/pagina2', 'TemplateController@pagina2');
Route::get('/pagina3', 'TemplateController@pagina3');

Route::post('/index', 'CursoController@calcularMedia');


Route::post('/calcular-media', 'CursoController@calcularMedia');

//LISTA 2
Route::get('/Exercicio1', function () {
    return view('Lista2.Exercicio1');
});
Route::post('/Exercicio1', 'Lista2Controller@Exercicio1Resultado');

Route::get('/Exercicio2', function () {
    return view('Lista2.Exercicio2');
});
Route::post('/Exercicio2', 'Lista2Controller@Exercicio2Resultado');
    
Route::get('/Exercicio3', function () {
    return view('Lista2.Exercicio3');
});
Route::post('/Exercicio3', 'Lista2Controller@Exercicio3Resultado');
    
Route::get('/Exercicio4', function () {
    return view('Lista2.Exercicio4');
});
Route::post('/Exercicio4', 'Lista2Controller@Exercicio4Resultado');
    
Route::get('/Exercicio5', function () {
    return view('Lista2.Exercicio5');
});
Route::post('/Exercicio5', 'Lista2Controller@Exercicio5Resultado');
    
Route::get('/Exercicio6', function () {
    return view('Lista2.Exercicio6');
});
Route::post('/Exercicio6', 'Lista2Controller@Exercicio6Resultado');
    
Route::get('/Exercicio7', function () {
    return view('Lista2.Exercicio7');
});
Route::post('/Exercicio7', 'Lista2Controller@Exercicio7Resultado');
    
Route::get('/Exercicio8', function () {
    return view('Lista2.Exercicio8');
});
Route::post('/Exercicio8', 'Lista2Controller@Exercicio8Resultado');
//FIM LISTA 2

//
Route::resource('/Curso', 'CursoController');
Route::resource('/Aluno', 'AlunoController');
Route::resource('/Disciplina', 'DisciplinaController');
Route::get('/curso/{id}/destroy', 'CursoController@destroy');
Route::get('/curso/{id}/edit', 'CursoController@edit');
//Route::resource('/Aluno', 'AlunoController');
//Route::resource('/Disciplina', 'DisciplinaController');
//Route::resource('/Professor', 'ProfessorController');
//Route::resource('/Turma', 'TurmaController');


