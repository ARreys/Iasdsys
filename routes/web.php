<?php

/* Rota tela inicial */
Route::get('/', function () {
    return view('index-pages/tela-inicio');
})->name('inicio');
/* ---------------------------------------- */

/* Rota get anuncios */
Route::get('/anuncios', "Controller\OrganizacaoController@anuncioView")->name("anuncio");
/* ---------------------------------------- */

/* Rota get contato */
Route::get('/contato-localizacao', function() {
    return view('contato-localizacao');
})->name("contato");
/* ---------------------------------------- */

/* Rota get contato */
Route::get('/painel', function() {
    return view('organizacao/painel');
})->name("painel");
/* ---------------------------------------- */

/* Rota post do formulário para organização */
Route::post('/envioform', 'Controller\SegurancaController@login')->name('organizacao');
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

