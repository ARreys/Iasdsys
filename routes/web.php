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
    /** Painel administração */
    Route::get('/painel', 'Controller\UsuarioC@viewPainel')->name('user.view.painel');
    /**View Tabela de Visitantes */
    Route::get('/pessoa/visitantes', 'Controller\UsuarioC@viewVisitantes')->name('user.view.visitante');
    /**View Tabela de marcaram presença */
    Route::get('pessoa/agendada', 'Controller\UsuarioC@viewMarcaramPresenca')->name('user.view.pessoaPresente');
    /**Tabela de administradores(usaurios) */
    Route::get('/admins', 'Controller\UsuarioC@viewAdmin')->name('user.view.admin');
    /**Remover anuncio */
    Route::get('/remover/anuncio', 'Controller\UsuarioC@viewRemoveAnuncio')->name('user.view.removerAnuncio');
    /** Login e logout */
    Route::post('/login', 'Controller\UsuarioC@login')->name('user.login');
    Route::get('/logout', 'Controller\UsuarioC@logout')->name('user.logout');
});


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
        'capacidade' => 7
    ]);
    return 'Sistema startado';
});
