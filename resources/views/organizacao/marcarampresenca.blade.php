<html lang="pt-br">
@component('componentes.head')
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<link href="{{asset('css/painel.css')}}" rel="stylesheet" />
<script src="{{asset('js/all.min.js')}}" crossorigin="anonymous"></script>
@endcomponent

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route('inicio')}}">IASD Central PHB</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group"></div>
        </form>
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="{{route('inicio')}}">Voltar pro inicio</a>
                    <a class="dropdown-item" href="{{route('user.logout')}}">Sair</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Análise</div>
                        <a class="nav-link" href="{{route('user.view.painel')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Painel de Controle
                        </a>
                        <div class="sb-sidenav-menu-heading">Alterar Propriedades</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Anúncios
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <button class="nav-link waves-effect waves-light" data-toggle="modal" data-target="#adicionaranuncio">Adicionar Anúncio</button>
                                <a class="nav-link" href="{{route('user.view.removerAnuncio')}}">Remover Anúncio</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Tabelas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="{{route('user.view.visitante')}}">
                                    Visitantes
                                </a>
                                <a class="nav-link" href="{{route('user.view.pessoaPresente')}}">
                                    Marcaram Presença
                                </a>
                            </nav>

                        </div>
                        <div class="sb-sidenav-menu-heading">Administração</div>
                        <a class="nav-link" href="{{route('user.view.admin')}}">
                            <div class="sb-nav-link-icon"><i data-feather="search"></i></div>
                            Administradores
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Painel de Controle</h1>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Marcaram Presença
                            <!-- <a data-toggle="modal" href="#confirmarexclusaodetodos">
                                <button type="button" class="btn btn-danger botaoremovertodos">Remover todos</button>
                            </a> -->
                        </div>
                        <!-- <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="marcarampresenca" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nome completo</th>
                                            <th scope="col">Idade</th>
                                            <th scope="col">Contato</th>
                                            <th scope="col">Quantidade Acompanhante</th>
                                            <th scope="col">Visitante</th>
                                        </tr>
                                    </thead> -->
                                    <!-- ELEMENTO DE TABELA (PUXAR DO BANCO DE DADOS) -->
                                    <!-- @component('componentes.tabela', ['idvisitante' => '0', 'nomecompleto' => 'Arthur Alves Reis', 'idade' => '20', 'contato' => '86 99591-3835', 'quantidadeacompanhante' => '0', 'visitante' => 'nao'])
                                    @endcomponent -->
                                    <!-- FIM DO ELEMENTO -->
                                <!-- </table>
                            </div>
                        </div>
                        {{--  @component('componentes.tabela', ['idtabela' => 'tabelapresenca', 'idvisitante' => '0', 'nomecompleto' => 'Arthur Alves Reis', 'idade' => '20', 'contato' => '86 99591-3835', 'quantidadeacompanhante' => '0', 'visitante' => 'nao'])
                            <button type="button" class="btn btn-danger">Remover</button>
                            <button type="button" class="btn btn-primary">Alterar</button>
                        @endcomponent  --}} -->
                        @include('includes.tabela_painel')
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Igreja Adventista do Sétimo Dia - Central - Parnaíba</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script>feather.replace();</script>
    <script src="{{asset('js/painel-jquery-3.5.1.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('js/painel.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

    @component('componentes.modal', ['id' => 'adicionaranuncio', 'titulo' => 'Adicionar Anúncio'])
        <form class="needs-validation text-black" novalidate method="POST" action="{{ route('evento.create') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-column">
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom01">Título do Anúncio</label>
                        <input type="text" class="form-control" id="nome-completo" placeholder="Insira o título do anúncio" name="titulo" required>
                        <div class="valid-feedback">Tudo certo!</div>
                        <div class="invalid-feedback">Ops, e o título ?.</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom02">Texto do anúncio</label>
                        <textarea class="form-control" id="idade" name="descricao" required>

                        </textarea>
                        <div class="valid-feedback">Tudo certo!</div>
                        <div class="invalid-feedback">Ops, e o texto do anúncio ?</div>
                    </div>
                </div>
                <div class="form-row" id="upload-container">
                    <div class="col-md-12">
                        <input type="file" name="img" class="file" id="arquivo" accept="image/*" style="visibility: hidden; position: absolute;">

                        <div class="input-group my-3">
                            <input type="text" class="form-control" disabled placeholder="Escolher Imagem" id="file-texto">
                            <div class="input-group-append">
                                <button type="button" class="browse btn" style="background-color:rgb(108,140,59);color:white" id="btn-up">Escolher</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Criar Anúncio</button>
            </div>
            <script>
                $(function(){
                    $("#btn-up").click(function() {
                        var file = $(this).parents().find("#arquivo");
                        file.trigger("click");
                    });
                    $('input#arquivo').change(function(e) {
                        var fileName = e.target.files[0].name;
                        //seleciona o input texto
                         $("#file-texto").val(fileName);
                    });
                });
            </script>
        </form>
    @endcomponent
    @component('componentes.modal', ['id' => 'confirmarexclusao', 'titulo' => 'Confirmar Exclusão'])
        <form class="needs-validation text-black" novalidate>
            <div class="form-column">
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom01">Esta pessoa será excluida permanentemente, tem certeza que deseja prosseguir ?</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-danger">Excluir</button>
            </div>
        </form>
    @endcomponent
    @component('componentes.modal', ['id' => 'confirmarexclusaodetodos', 'titulo' => 'Confirmar exclusão de todas as presenças'])
        <form class="needs-validation text-black" novalidate>
            <div class="form-column">
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom01">Todos as pessoas serão excluidas permanentemente, tem certeza que deseja prosseguir ?</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-danger">Excluir Todos</button>
            </div>
        </form>
    @endcomponent
    @component('componentes.modal', ['id' => 'modalalterarpessoa', 'titulo' => 'Alterar dados de presença'])
        <form class="needs-validation text-black" novalidate method="POST" action="{{ route('pessoa.create.presenca') }}">
            @csrf
            <div class="form-column">
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom01">Nome Completo</label>
                        <input type="text" class="form-control" id="nome-completo" placeholder="Insira o novo nome completo" name="nome" required>
                        <div class="valid-feedback">Tudo certo!</div>
                        <div class="invalid-feedback">Ops, seu nome.</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Data Nascimento</label>
                         <input type="date" class="form-control" id="idade" placeholder="Insira a nova data de nascimento" name="data_nasc" required>
                        <div class="valid-feedback">Tudo certo!</div>
                        <div class="invalid-feedback">Ops, sua idade.</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="mb-3">
                            <label for="validationCustom03">Contato</label>
                            <input type="text" class="form-control" id="contato" placeholder="(com DDD)*" name="telefone" required>
                            <div class="valid-feedback">Tudo certo!</div>
                            <div class="invalid-feedback">Ops, seu contato.</div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <input type="number" class="form-control" id="qtdacompanhante" placeholder="Quantidade" name="quantidade" aria-describedby="inputGroupPrepend" disabled required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="acompanhante" onchange="habilitar()" >
                            <label class="form-label">Levará acompanhantes</label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="visitante" name="visita">
                            <label class="form-label">É visitante</label>
                        </div>
                     </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Confirmar</button>
            </div>
        </form>
    @endcomponent
</body>
    @component('componentes.scripts')
    @endcomponent

</html>
