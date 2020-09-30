<?php



// Route::prefix("/back")->group(function(){
//     //pagina inicial do barra app
//     Route::get('/', function () {
//         return 'Inicio app';
//     });
// });

/* Rota tela inicial */
Route::get('/', function () {
    return view('index-pages/tela-inicio');
})->name('inicio');
/* ----------------------------------------Area Comum Pessoa----------------------------------------- */
Route::prefix("/common")->group(function(){
    /* Rota anuncios */
    Route::get('/anuncios', 'Controller\PessoaC@viewAnuncios')->name("anuncios");
    /* Rota contato */
    Route::get('/contato-localizacao','Controller\PessoaC@viewContato')->name("contato_localizacao");
    /** Marcar Presença*/
    Route::post('local/presenca', 'Controller\PresencaC@agendarPresenca')->name('pessoa.create.presenca');
});
/* ----------------------------------------Usuario------------------------------------------------ */
Route::prefix("/user-admin")->group(function(){
    /** Login */
    Route::post('/login', 'Controller\UsuarioC@login')->name('user.login');
    Route::get('/logout', 'Controller\UsuarioC@logout')->name('user.logout');
});





/* ---------------------------------------- */

/* Rota post do formulário para organização */
Route::post('/envioform', 'Controller\SegurancaController@login')->name('organizacao');

// Route::get('/painel', "Controller\OrganizacaoController@painelView")->name("painel");
// Route::get('/removeranuncio', "Controller\OrganizacaoController@removeranuncioView")->name("removeranuncio");
// Route::get('/visitantes', "Controller\OrganizacaoController@visitantesView")->name("visitantes");
// Route::get('/presencas', "Controller\OrganizacaoController@presencasView")->name("presencas");
// Route::get('/administradores', "Controller\OrganizacaoController@administradoresView")->name("admins");
/* ---------------------------------------- */

/* ---------------------------------------- */

/* Rota get painel */


Route::get('/painel', function(){
    return view('organizacao.painel');
})->name("painel");


/* Rota post do formulário para administração */
Route::get('/envioform', function() {
    return view('inicio');
})->name("usernaoencontrado");
/* ---------------------------------------- */


Route::get('/start-system',function(){
    App\Model\Usuario::create([
        "nome" => "Admin User",
        "telefone" => '88 6666-9999',
        'senha' => 'admin'
    ]);
    App\Model\Local::create([
        "nome" => "Igreja",
        "rua" => 'rua nome',
        'bairro' => 'bairro nome',
        'em_uso' => 1,
        'capacidade' => 40
    ]);
    return 'Sistema startado';
});
