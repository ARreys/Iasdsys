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
        <a class="navbar-brand" href="index.html">IASD Central PHB</a>
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
                            <button type="button" class="btn btn-primary botaofecharmarcacao">Fechar Marcação</button>
                            <button type="button" class="btn btn-danger botaoremovertodos">Remover todos</button>
                        </div>
                        @component('componentes.tabela', ['idtabela' => 'tabelapresenca', 'idvisitante' => '0', 'nomecompleto' => 'Arthur Alves Reis', 'idade' => '20', 'contato' => '86 99591-3835', 'quantidadeacompanhante' => '0', 'visitante' => 'nao'])
                            <button type="button" class="btn btn-danger">Remover</button>
                            <button type="button" class="btn btn-primary">Alterar</button>
                        @endcomponent
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
        <form class="needs-validation text-black" novalidate>
            <div class="form-column">
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom01">Título do Anúncio</label>
                        <input type="text" class="form-control" id="nome-completo" placeholder="Insira o título do anúncio" required>
                        <div class="valid-feedback">Tudo certo!</div>
                        <div class="invalid-feedback">Ops, e o título ?.</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom02">Texto do anúncio</label>
                        <input type="text" class="form-control" id="idade" placeholder="Insira o texto do anúncio" required>
                        <div class="valid-feedback">Tudo certo!</div>
                        <div class="invalid-feedback">Ops, e o texto do anúncio ?</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-success mb-3" data-dismiss="modal">Fazer upload de imagem</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Criar Anúncio</button>
            </div>
        </form>
    @endcomponent
</body>
    @component('componentes.scripts')
    @endcomponent

</html>
