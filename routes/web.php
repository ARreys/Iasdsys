<?php

/* Rota tela inicial */
Route::get('/', function () {
    return view('index-pages/tela-inicio');
})->name('inicio');
/* ---------------------------------------- */

/* Rota get anuncios */
Route::get('/anuncios', function() {
    return view('anuncios');
})->name("anuncios");
/* ---------------------------------------- */

/* Rota get contato */
Route::get('/contato-localizacao', function() {
    return view('contato-localizacao');
})->name("contato_localizacao");
/* ---------------------------------------- */

/* Rota post do formulário para organização */
Route::post('/envioform', 'Controller\SegurancaController@login')->name('organizacao');
/* ---------------------------------------- */

/* Rota get painel */
Route::get('/painel', "Controller\OrganizacaoController@painelView")->name("painel");
/* ---------------------------------------- */

/* Rota post do formulário para organização */
Route::get('/envioform', function() {
    return view('inicio');
})->name("usernaoencontrado");
/* ---------------------------------------- */

/* Rota get logout */
Route::get("/logout", function(){
    session()->flush();
    return redirect()->route("inicio");
})->name("logout");
/* ---------------------------------------- */
