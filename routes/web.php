<?php

use Illuminate\Support\Facades\Route;


route::get('/login', function () {
    return view('auth.login');
});
route::get('/register', function () {
    return view('auth.register');
});
Route::get('/', function () {
    return view('index');
});


// Rota para are de pessoas
route::get('/pessoas', function () {
    return view('pessoas.index');
});
route::get('/pessoas/arbitros', function () {
    return view('pessoas.arbitros.index');
});
route::get('/pessoas/criadores', function () {
    return view('pessoas.criadores.index');
});
route::get('/pessoas/meu-perfil', function () {
    return view('pessoas.meu-perfil.index');
});
route::get('/pessoas/parceiros', function () {
    return view('pessoas.parceiros.index');
});
route::get('/pessoas/tecnicos', function () {
    return view('pessoas.tecnicos.index');
});
route::get('/pessoas/veterinarios', function () {
    return view('pessoas.veterinarios.index');
});
route::get('/pessoas/zootecnistas', function () {
    return view('pessoas.zootecnistas.index');
});


// Rota para area de Animais
Route::get('/animais', function () {
    return view('animais.index');
});
Route::get('/animais/asininos', function () {
    return view('animais.asininos.index');
});
Route::get('/animais/equinos', function () {
    return view('animais.equinos.index');
});
Route::get('/animais/meus-animais', function () {
    return view('animais.meus-cadastrados.index');
});







Route::get('/financeiro', function () {
    return view('financeiro.index');
});
Route::get('/resenha', function () {
    return view('resenha.index');
});
Route::get('/configuracoes', function () {
    return view('configuracoes.index');
});
Route::get('/comunicacoes', function () {
    return view('comunicacoes.index');
});
